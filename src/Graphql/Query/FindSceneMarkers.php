<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\Query;

class FindSceneMarkers implements \Aazsamir\Graphpql\Model\Query
{
    public const NAME = 'findSceneMarkers';
    public const RETURN_TYPE = '\Aazsamir\Stasphp\Graphpql\FindSceneMarkersResultType';

    private \Aazsamir\Stasphp\Graphpql\SelectionSet\FindSceneMarkersResultTypeSelectionSet $selection;
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
     * @param array<string> $ids
     */
    public function __construct(
        public ?\Aazsamir\Stasphp\Graphpql\SceneMarkerFilterType $scene_marker_filter = null,
        public ?\Aazsamir\Stasphp\Graphpql\FindFilterType $filter = null,
        public ?array $ids = null,
    ) {
    }

    public function getVars(): array
    {
        return [
            'scene_marker_filter' => $this->scene_marker_filter,
            'filter' => $this->filter,
            'ids' => $this->ids,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphpql\SelectionSet\FindSceneMarkersResultTypeSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphpql\SelectionSet\FindSceneMarkersResultTypeSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(
        \Aazsamir\Stasphp\Graphpql\SelectionSet\FindSceneMarkersResultTypeSelectionSet $selection,
    ): self {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphpql\SelectionSet\FindSceneMarkersResultTypeSelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    public function do(): ?\Aazsamir\Stasphp\Graphpql\FindSceneMarkersResultType
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
