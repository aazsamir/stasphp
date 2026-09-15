<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Query;

class FindImages implements \Aazsamir\Graphpql\Model\Query
{
    public const NAME = 'findImages';
    public const RETURN_TYPE = '\Aazsamir\Stasphp\Graphql\FindImagesResultType';

    private \Aazsamir\Stasphp\Graphql\SelectionSet\FindImagesResultTypeSelectionSet $selection;
    private \Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient;

    public static function getName(): string
    {
        return self::NAME;
    }

    public static function getReturnType(): string
    {
        return self::RETURN_TYPE;
    }

    /**
     * @param array<int> $image_ids
     * @param array<string> $ids
     */
    public function __construct(
        public ?\Aazsamir\Stasphp\Graphql\ImageFilterType $image_filter = null,
        public ?array $image_ids = null,
        public ?array $ids = null,
        public ?\Aazsamir\Stasphp\Graphql\FindFilterType $filter = null,
    ) {
    }

    public function getVars(): array
    {
        return [
            'image_filter' => $this->image_filter,
            'image_ids' => $this->image_ids,
            'ids' => $this->ids,
            'filter' => $this->filter,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphql\SelectionSet\FindImagesResultTypeSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphql\SelectionSet\FindImagesResultTypeSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(
        \Aazsamir\Stasphp\Graphql\SelectionSet\FindImagesResultTypeSelectionSet $selection,
    ): self {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphql\SelectionSet\FindImagesResultTypeSelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    public function do(): ?\Aazsamir\Stasphp\Graphql\FindImagesResultType
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
