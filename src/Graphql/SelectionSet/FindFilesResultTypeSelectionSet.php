<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\SelectionSet;

class FindFilesResultTypeSelectionSet implements \Aazsamir\Graphpql\Model\SelectionSet
{
    private array $selection = [];

    public static function new(): self
    {
        return new self();
    }

    public function select(\Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField ...$selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField[]
     */
    public function getSelection(): array
    {
        return $this->selection;
    }
}
