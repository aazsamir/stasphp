<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\SelectionSet;

class BasicFileSelectionSet implements \Aazsamir\Graphpql\Model\SelectionSet
{
    private array $selection = [];

    public static function new(): self
    {
        return new self();
    }

    public function select(\Aazsamir\Stasphp\Graphpql\Fields\BasicFileField ...$selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\BasicFileField[]
     */
    public function getSelection(): array
    {
        return $this->selection;
    }
}
