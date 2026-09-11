<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\SelectionSet;

class StashBoxFingerprintSelectionSet implements \Aazsamir\Graphpql\Model\SelectionSet
{
    private array $selection = [];

    public static function new(): self
    {
        return new self();
    }

    public function select(\Aazsamir\Stasphp\Graphpql\Fields\StashBoxFingerprintField ...$selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StashBoxFingerprintField[]
     */
    public function getSelection(): array
    {
        return $this->selection;
    }
}
