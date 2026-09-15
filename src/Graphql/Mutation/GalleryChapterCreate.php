<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Mutation;

class GalleryChapterCreate implements \Aazsamir\Graphpql\Model\Mutation
{
    public const NAME = 'galleryChapterCreate';
    public const RETURN_TYPE = '\Aazsamir\Stasphp\Graphql\GalleryChapter';

    private \Aazsamir\Stasphp\Graphql\SelectionSet\GalleryChapterSelectionSet $selection;
    private \Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient;

    public static function getName(): string
    {
        return self::NAME;
    }

    public static function getReturnType(): string
    {
        return self::RETURN_TYPE;
    }

    public function __construct(
        public \Aazsamir\Stasphp\Graphql\GalleryChapterCreateInput $input,
    ) {
    }

    public function getVars(): array
    {
        return [
            'input' => $this->input,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphql\SelectionSet\GalleryChapterSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphql\SelectionSet\GalleryChapterSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(\Aazsamir\Stasphp\Graphql\SelectionSet\GalleryChapterSelectionSet $selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphql\SelectionSet\GalleryChapterSelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    public function do(): ?\Aazsamir\Stasphp\Graphql\GalleryChapter
    {
        $response = $this->graphqlClient->request($this);

        if ($response->data === null) {
            return null;
        }

        $returnType = self::getReturnType();

        return $returnType::fromArray($response->data);
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
