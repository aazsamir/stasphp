<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Fields;

/**
 * @template T
 */
class StashBoxPerformerQueryResultField implements \Aazsamir\Graphpql\Model\ObjectField
{
    private string $name;
    private \Aazsamir\Graphpql\Model\SelectionSet $child;
    private ?string $union = null;

    /**
     * @return self<mixed>
     */
    public static function query(): self
    {
        $instance = new self();
        $instance->name = 'query';

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedPerformerSelectionSet>
     */
    public static function results(): self
    {
        $instance = new self();
        $instance->name = 'results';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedPerformerSelectionSet();

        return $instance;
    }

    /**
     * @param callable(T): void $selection
     */
    public function selector(callable $selection): self
    {
        $selection($this->child);

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChild(): ?\Aazsamir\Graphpql\Model\SelectionSet
    {
        if (isset($this->child)) {
            return $this->child;
        }

        return null;
    }

    public function getUnion(): ?string
    {
        return $this->union;
    }
}
