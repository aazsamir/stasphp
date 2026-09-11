<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\Mutation;

class SceneDeletePlay implements \Aazsamir\Graphpql\Model\Mutation
{
    public const NAME = 'sceneDeletePlay';
    public const RETURN_TYPE = '\Aazsamir\Stasphp\Graphpql\HistoryMutationResult';

    private \Aazsamir\Stasphp\Graphpql\SelectionSet\HistoryMutationResultSelectionSet $selection;
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
     * @param array<\DateTimeInterface> $times
     */
    public function __construct(
        public string $id,
        public ?array $times = null,
    ) {
    }

    public function getVars(): array
    {
        return [
            'id' => $this->id,
            'times' => $this->times,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphpql\SelectionSet\HistoryMutationResultSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphpql\SelectionSet\HistoryMutationResultSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(
        \Aazsamir\Stasphp\Graphpql\SelectionSet\HistoryMutationResultSelectionSet $selection,
    ): self {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphpql\SelectionSet\HistoryMutationResultSelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    public function do(): ?\Aazsamir\Stasphp\Graphpql\HistoryMutationResult
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
