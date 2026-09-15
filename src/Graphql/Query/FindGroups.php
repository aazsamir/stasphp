<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Query;

class FindGroups implements \Aazsamir\Graphpql\Model\Query
{
    public const NAME = 'findGroups';
    public const RETURN_TYPE = '\Aazsamir\Stasphp\Graphql\FindGroupsResultType';

    private \Aazsamir\Stasphp\Graphql\SelectionSet\FindGroupsResultTypeSelectionSet $selection;
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
        public ?\Aazsamir\Stasphp\Graphql\GroupFilterType $group_filter = null,
        public ?\Aazsamir\Stasphp\Graphql\FindFilterType $filter = null,
        public ?array $ids = null,
    ) {
    }

    public function getVars(): array
    {
        return [
            'group_filter' => $this->group_filter,
            'filter' => $this->filter,
            'ids' => $this->ids,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphql\SelectionSet\FindGroupsResultTypeSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphql\SelectionSet\FindGroupsResultTypeSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(
        \Aazsamir\Stasphp\Graphql\SelectionSet\FindGroupsResultTypeSelectionSet $selection,
    ): self {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphql\SelectionSet\FindGroupsResultTypeSelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    public function do(): ?\Aazsamir\Stasphp\Graphql\FindGroupsResultType
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
