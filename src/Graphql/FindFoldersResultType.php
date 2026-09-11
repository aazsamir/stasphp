<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindFoldersResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Folder> */
    public array $folders;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindFoldersResultTypeField<mixed>
     */
    public static function count(): Fields\FindFoldersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindFoldersResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindFoldersResultTypeField<\Aazsamir\Stasphp\Graphpql\SelectionSet\FolderSelectionSet>
     */
    public static function folders(): Fields\FindFoldersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindFoldersResultTypeField::folders();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\Folder> $folders
     */
    public static function new(int $count, array $folders): self
    {
        $self = new self();
        $self->count = $count;
        $self->folders = $folders;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['folders'])) {
            $self->folders = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Folder::fromArray($data);
            }, $data['folders'] ?? []);
        }

        return $self;
    }
}
