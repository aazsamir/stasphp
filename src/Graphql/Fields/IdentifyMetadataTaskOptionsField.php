<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Fields;

/**
 * @template T
 */
class IdentifyMetadataTaskOptionsField implements \Aazsamir\Graphpql\Model\ObjectField
{
    private string $name;
    private \Aazsamir\Graphpql\Model\SelectionSet $child;
    private ?string $union = null;

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\IdentifySourceSelectionSet>
     */
    public static function sources(): self
    {
        $instance = new self();
        $instance->name = 'sources';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\IdentifySourceSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\IdentifyMetadataOptionsSelectionSet>
     */
    public static function options(): self
    {
        $instance = new self();
        $instance->name = 'options';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\IdentifyMetadataOptionsSelectionSet();

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
