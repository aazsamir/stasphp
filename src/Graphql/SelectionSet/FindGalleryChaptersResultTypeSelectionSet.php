<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\SelectionSet;

class FindGalleryChaptersResultTypeSelectionSet implements \Aazsamir\Graphpql\Model\SelectionSet
{
    private array $selection = [];

    public static function new(): self
    {
        return new self();
    }

    public function select(\Aazsamir\Stasphp\Graphql\Fields\FindGalleryChaptersResultTypeField ...$selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindGalleryChaptersResultTypeField[]
     */
    public function getSelection(): array
    {
        return $this->selection;
    }
}
