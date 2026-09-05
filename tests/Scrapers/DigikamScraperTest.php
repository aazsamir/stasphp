<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Tests\Scrapers;

use Aazsamir\Stasphp\Plugin\Input\ServerConnection;
use Aazsamir\Stasphp\Plugin\Input\SessionCookie;
use Aazsamir\Stasphp\Scraper\Input\SceneByFragment;
use Stasphp\Scrapers\Digikam\DigikamScraper;
use PHPUnit\Framework\TestCase;

final class DigikamScraperTest extends TestCase
{
    public function testScrapesBasicMetadataFromDigikamSqliteDatabase(): void
    {
        $dbPath = tempnam(sys_get_temp_dir(), 'digikam');
        if ($dbPath === false) {
            self::fail('Unable to create temporary database file.');
        }

        unlink($dbPath);

        $pdo = new \PDO('sqlite:' . $dbPath);
        $pdo->exec('CREATE TABLE images (id INTEGER PRIMARY KEY, name TEXT, title TEXT, caption TEXT, creationDate TEXT, modificationDate TEXT);');
        $pdo->exec("INSERT INTO images (name, title, caption, creationDate, modificationDate) VALUES ('IMG_001.jpg', 'Sunrise', 'A lovely sunrise', '2024-04-12 08:30:00', '2024-04-12 09:45:00')");
        $pdo = null;

        try {
            $scraper = new DigikamScraper();
            $input = new SceneByFragment(
                serverConnection: new ServerConnection('', 0, new SessionCookie(null, null, null, null, null, null, null, null, null, null, null, null), '', null),
                url: 'https://example.com',
                args: ['db_path' => $dbPath],
            );

            $output = $scraper->scrapeByFragment($input);

            self::assertNotNull($output);
            self::assertNull($output->error);
            self::assertIsArray($output->output);
            self::assertCount(1, $output->output);
            self::assertSame('Sunrise', $output->output[0]['title'] ?? null);
            self::assertSame('A lovely sunrise', $output->output[0]['details'] ?? null);
            self::assertSame($dbPath, $output->output[0]['database'] ?? null);
        } finally {
            if (file_exists($dbPath)) {
                unlink($dbPath);
            }
        }
    }

    public function testExecuteFromJsonStringSupportsStashStyleQueryInput(): void
    {
        $dbPath = tempnam(sys_get_temp_dir(), 'digikam-query');
        if ($dbPath === false) {
            self::fail('Unable to create temporary database file.');
        }

        unlink($dbPath);

        $pdo = new \PDO('sqlite:' . $dbPath);
        $pdo->exec('CREATE TABLE images (id INTEGER PRIMARY KEY, name TEXT, title TEXT, caption TEXT, creationDate TEXT, modificationDate TEXT);');
        $pdo->exec("INSERT INTO images (name, title, caption, creationDate, modificationDate) VALUES ('IMG_001.jpg', 'Sunrise', 'A lovely sunrise', '2024-04-12 08:30:00', '2024-04-12 09:45:00')");
        $pdo = null;

        try {
            $scraper = new DigikamScraper();
            $payload = $scraper->executeFromJsonString(json_encode(['db_path' => $dbPath, 'name' => 'Sunrise']), 'query');
            $decoded = json_decode($payload, true);

            self::assertIsArray($decoded);
            self::assertCount(1, $decoded);
            self::assertSame('Sunrise', $decoded[0]['title'] ?? null);
        } finally {
            if (file_exists($dbPath)) {
                unlink($dbPath);
            }
        }
    }

    public function testReturnsTagsAndNormalizedRatingFromImageMetadata(): void
    {
        $dbPath = tempnam(sys_get_temp_dir(), 'digikam-rating');
        if ($dbPath === false) {
            self::fail('Unable to create temporary database file.');
        }

        unlink($dbPath);

        $pdo = new \PDO('sqlite:' . $dbPath);
        $pdo->exec('CREATE TABLE images (id INTEGER PRIMARY KEY, name TEXT, title TEXT, caption TEXT, modificationDate TEXT);');
        $pdo->exec('CREATE TABLE tags (id INTEGER PRIMARY KEY, name TEXT);');
        $pdo->exec('CREATE TABLE ImageTags (imageid INTEGER, tagid INTEGER);');
        $pdo->exec('CREATE TABLE ImageInformation (imageid INTEGER PRIMARY KEY, rating INTEGER);');
        $pdo->exec("INSERT INTO images (name, title, caption, modificationDate) VALUES ('IMG_001.jpg', 'Sunrise', 'A lovely sunrise', '2024-04-12 09:45:00')");
        $pdo->exec("INSERT INTO tags (id, name) VALUES (0, '_Digikam_Internal_Tags_')");
        $pdo->exec("INSERT INTO tags (id, name) VALUES (3, 'Color Label None')");
        $pdo->exec("INSERT INTO tags (id, name) VALUES (4, 'Pick Label None')");
        $pdo->exec("INSERT INTO tags (id, name) VALUES (1, 'Color Label Green')");
        $pdo->exec("INSERT INTO tags (id, name) VALUES (2, 'toomuch')");
        $pdo->exec('INSERT INTO ImageTags (imageid, tagid) VALUES (1, 0)');
        $pdo->exec('INSERT INTO ImageTags (imageid, tagid) VALUES (1, 3)');
        $pdo->exec('INSERT INTO ImageTags (imageid, tagid) VALUES (1, 4)');
        $pdo->exec('INSERT INTO ImageTags (imageid, tagid) VALUES (1, 1)');
        $pdo->exec('INSERT INTO ImageTags (imageid, tagid) VALUES (1, 2)');
        $pdo->exec('INSERT INTO ImageInformation (imageid, rating) VALUES (1, 3)');
        $pdo = null;

        try {
            $scraper = new DigikamScraper();
            $input = new SceneByFragment(
                serverConnection: new ServerConnection('', 0, new SessionCookie(null, null, null, null, null, null, null, null, null, null, null, null), '', null),
                url: 'https://example.com',
                args: ['db_path' => $dbPath],
            );

            $output = $scraper->scrapeByFragment($input);

            self::assertNotNull($output);
            self::assertNull($output->error);
            self::assertIsArray($output->output);
            self::assertCount(1, $output->output);
            self::assertSame(['Color Label Green', 'toomuch'], $output->output[0]['tags'] ?? null);
            self::assertSame(80, $output->output[0]['rating'] ?? null);
        } finally {
            if (file_exists($dbPath)) {
                unlink($dbPath);
            }
        }
    }
}
