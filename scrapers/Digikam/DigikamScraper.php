<?php

declare(strict_types=1);

namespace Stasphp\Scrapers\Digikam;

use Aazsamir\Stasphp\Scraper\Input\SceneByFragment;
use Aazsamir\Stasphp\Scraper\Input\SceneByName;
use Aazsamir\Stasphp\Scraper\ScraperByFragment;
use Aazsamir\Stasphp\Scraper\ScraperByName;
use Aazsamir\Stasphp\Scraper\ScraperOutput;
use Pdo\Sqlite;

class DigikamScraper implements ScraperByFragment, ScraperByName
{
    private array $mounts;
    private array $tags;
    private Sqlite $db;

    public function __construct(
        private string $dbPath = '',
    ) {
        $this->dbPath = __DIR__ . '/../../var/digikam4.db'; // TODO: remove hardcoded path and make it configurable
        $this->db = new Sqlite('sqlite:' . $this->dbPath);
    }

    public function scrapeByFragment(SceneByFragment $input): ?ScraperOutput
    {
        $file = $input->files[0] ?? throw new \RuntimeException('No files provided in input.');
        $albumRoots = $this->getAlbumRoots();
        $path = $file->path;
        $albumRootId = null;

        foreach ($albumRoots as $albumRootId => $root) {
            if (\str_starts_with($path, $root)) {
                $path = \substr($path, \strlen($root));
                $albumRootId = $albumRootId;

                break;
            }
        }

        $result = $this->findByPath($path, $albumRootId);

        if (!$result) {
            return null;
        }

        return new ScraperOutput(
            title: null,
            rating: $result['rating'] ? $result['rating'] * 20 : null, // Convert rating from 0-5 scale to 0-100 scale
            tags: $result['tags'] ?? [],
        );
    }

    public function scrapeByName(SceneByName $input): ?ScraperOutput
    {
        $name = $input->name;
        $result = $this->findByName($name);

        if (!$result) {
            return null;
        }

        return new ScraperOutput(
            title: null,
            rating: $result['rating'] ? $result['rating'] * 20 : null, // Convert rating from 0-5 scale to 0-100 scale
            tags: $result['tags'] ?? [],
        );
    }

    private function findByName(string $name): ?array
    {
        $query = <<<SQL
        SELECT
            Images.id,
            Images.name,
            ImageInformation.rating
        FROM
            Images
            JOIN ImageInformation ON ImageInformation.imageid = Images.id
        WHERE
            LOWER(Images.name) LIKE CONCAT('%', LOWER(:name), '%')
        LIMIT 1
        SQL;

        $result = $this->getFirst($query, ['name' => $name]);

        if (!$result) {
            return null;
        }

        $imageId = (int)$result['id'];

        $tags = $this->findImageTags($imageId);
        $result['rating'] = $result['rating'] > -1 ? (int)$result['rating'] : null;
        $result['tags'] = $tags;

        return $result;
    }

    private function findByPath(string $path, int $albumRootId)
    {
        $query = <<<SQL
        SELECT
            Images.id,
            Images.name,
            ImageInformation.rating
        FROM
            Images
            JOIN Albums ON Albums.id = Images.album
            JOIN ImageInformation ON ImageInformation.imageid = Images.id
        WHERE
            Albums.albumRoot = :albumRootId
            AND Images.name = :path
            AND Albums.relativePath = :relativePath
        LIMIT 1
        SQL;

        $relativePath = \dirname($path);
        $name = \basename($path);

        $result = $this->getFirst($query, [
            'albumRootId' => $albumRootId,
            'path' => $name,
            'relativePath' => $relativePath,
        ]);

        if (!$result) {
            return null;
        }

        $imageId = (int)$result['id'];

        $tags = $this->findImageTags($imageId);
        $result['rating'] = $result['rating'] > -1 ? (int)$result['rating'] : null;
        $result['tags'] = $tags;

        return $result;
    }

    private function findImageTags(int $imageId)
    {
        $query = <<<SQL
        SELECT
            Tags.id,
            Tags.name
        FROM
            Tags
            JOIN ImageTags ON ImageTags.tagid = Tags.id
        WHERE
            ImageTags.imageid = :imageId
            AND Tags.pid <> 1 -- digikam internal tags
        SQL;

        $tags = $this->getTags();
        $imageTags = $this->getAll($query, ['imageId' => $imageId]);
        $finalTags = [];

        foreach ($imageTags as $tag) {
            $tagId = (int)$tag['id'];

            if (isset($tags[$tagId])) {
                $finalTags[] = $tags[$tagId];
            }
        }

        return $finalTags;
    }

    private function getTags(): array
    {
        if (isset($this->tags)) {
            return $this->tags;
        }

        $query = 'SELECT * FROM Tags';
        $result = $this->getAll($query);
        $tags = [];

        foreach ($result as $row) {
            $tags[$row['id']] = [
                'og' => $row['name'],
                'pid' => $row['pid'],
            ];
        }

        $this->tags = $tags;

        return $this->buildTagsTree($tags);
    }

    // transform `grandchildren` name into `parent/children/grandchildren` name
    private function buildTagsTree(array $tags): array
    {
        $tree = [];

        foreach ($tags as $id => &$tag) {
            $name = $tag['og'];
            $pid = $tag['pid'];
            if ($pid !== 0 && isset($tags[$pid])) {
                $parentTag = &$tags[$pid];
                $tag['parent'] = $parentTag;
            }
        }
        unset($tag);

        foreach ($tags as $id => $tag) {
            $fullName = $tag['og'];
            $currentTag = $tag;

            while (isset($currentTag['parent'])) {
                $currentTag = $currentTag['parent'];
                $fullName = $currentTag['og'] . '/' . $fullName;
            }

            $tree[$id] = [
                'name' => $fullName,
                'pid' => $tag['pid'],
            ];
        }

        foreach ($tree as $id => &$tag) {
            if ($tag['pid'] !== 0 && isset($tree[$tag['pid']])) {
                $parentTag = &$tree[$tag['pid']];
                $tag['parent'] = $parentTag;
            }

            unset($tag['pid']);
        }

        return $tree;
    }

    private function getAlbumRoots(): array
    {
        $query = 'SELECT * FROM AlbumRoots';
        $result = $this->getAll($query);
        $mounts = $this->getMounts();
        $roots = [];

        foreach ($result as $row) {
            // volumeid:?uuid=7396c970-a50c-4347-afa0-f8bc3c403bdf&fileuuid=d2344cbc-9582-4260-95c9-19a28991fb37
            $id = $row['id'];
            $identifier = $row['identifier'];
            $specificPath = $row['specificPath'];

            // Extract the UUID from the identifier
            $regexp = '/volumeid:\?uuid=([a-f0-9\-]+)/';
            $matches = [];
            \preg_match($regexp, $identifier, $matches);
            $uuid = $matches[1] ?? null;

            if (!$uuid) {
                throw new \RuntimeException('Failed to extract UUID from identifier: ' . $identifier);
            }

            // Find the mount point corresponding to the UUID
            $mountPoint = null;
            foreach ($mounts as $target => $source) {
                if (str_contains($source, $uuid)) {
                    $mountPoint = $target;
                    break;
                }
            }
            $roots[$id] = $mountPoint . $specificPath;
        }

        return $roots;
    }

    private function getMounts(): array
    {
        if (isset($this->mounts)) {
            return $this->mounts;
        }

        // we use `findmnt` command to get the mount points and their corresponding device names
        $output = [];
        $resultCode = 0;
        exec('findmnt -rn -o SOURCE,TARGET', $output, $resultCode);

        if ($resultCode !== 0) {
            throw new \RuntimeException('Failed to get mount points using findmnt command.');
        }

        $mounts = [];

        foreach ($output as $line) {
            [$source, $target] = preg_split('/\s+/', $line);
            $mounts[$target] = $source;
        }

        $this->mounts = $mounts;

        return $mounts;
    }

    private function getFirst(string $query, array $params = []): ?array
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $result ?: null;
    }

    private function getAll(string $query, array $params = []): array
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
