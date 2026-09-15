<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Query;

class FindFile implements \Aazsamir\Graphpql\Model\Query
{
    public const NAME = 'findFile';

    private \Aazsamir\Stasphp\Graphql\SelectionSet\BaseFileSelectionSet $selection;
    private \Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient;

    public static function getName(): string
    {
        return self::NAME;
    }

    public function __construct(
        public ?string $id = null,
        public ?string $path = null,
    ) {
    }

    public function getVars(): array
    {
        return [
            'id' => $this->id,
            'path' => $this->path,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphql\SelectionSet\BaseFileSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphql\SelectionSet\BaseFileSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(\Aazsamir\Stasphp\Graphql\SelectionSet\BaseFileSelectionSet $selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphql\SelectionSet\BaseFileSelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    public function do(
    ): \Aazsamir\Stasphp\Graphql\BasicFile|\Aazsamir\Stasphp\Graphql\VideoFile|\Aazsamir\Stasphp\Graphql\ImageFile|\Aazsamir\Stasphp\Graphql\GalleryFile|null {
        $response = $this->graphqlClient->request($this);

        if ($response->data === null) {
            return null;
        }

        return ($response->data['__typename'] ?? '') === 'BasicFile'
                ? (\Aazsamir\Stasphp\Graphql\BasicFile::fromArray($response->data))
                : (($response->data['__typename'] ?? '') === 'VideoFile'
                    ? (\Aazsamir\Stasphp\Graphql\VideoFile::fromArray($response->data))
                    : (($response->data['__typename'] ?? '') === 'ImageFile'
                        ? (\Aazsamir\Stasphp\Graphql\ImageFile::fromArray($response->data))
                        : (($response->data['__typename'] ?? '') === 'GalleryFile'
                            ? (\Aazsamir\Stasphp\Graphql\GalleryFile::fromArray($response->data))
                            : (null))));
    }

    public function dd(): never
    {
        $content = new \Aazsamir\Graphpql\Client\QueryBuilder()->fromOperation($this);

        if (function_exists('dd')) {
            dd($content);
        }

        echo "<pre><br>
        ";
        echo($content);
        echo "</pre><br>
        ";
        exit(1);
    }
}
