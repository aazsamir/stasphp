<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\Fields;

/**
 * @template T
 */
class SceneMovieField implements \Aazsamir\Graphpql\Model\ObjectField
{
    private string $name;
    private \Aazsamir\Graphpql\Model\SelectionSet $child;
    private ?string $union = null;

    /**
     * @return self<\Aazsamir\Stasphp\Graphpql\SelectionSet\MovieSelectionSet>
     */
    public static function movie(): self
    {
        $instance = new self();
        $instance->name = 'movie';
        $instance->child = new \Aazsamir\Stasphp\Graphpql\SelectionSet\MovieSelectionSet();

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function scene_index(): self
    {
        $instance = new self();
        $instance->name = 'scene_index';

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
