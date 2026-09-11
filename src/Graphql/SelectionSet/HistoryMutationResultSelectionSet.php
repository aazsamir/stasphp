<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\SelectionSet;

class HistoryMutationResultSelectionSet implements \Aazsamir\Graphpql\Model\SelectionSet
{
    private array $selection = [];

    public static function new(): self
    {
        return new self();
    }

    public function select(\Aazsamir\Stasphp\Graphpql\Fields\HistoryMutationResultField ...$selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\HistoryMutationResultField[]
     */
    public function getSelection(): array
    {
        return $this->selection;
    }
}
