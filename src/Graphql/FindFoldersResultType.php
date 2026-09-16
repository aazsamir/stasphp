<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindFoldersResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphql\Folder> */
    public array $folders;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindFoldersResultTypeField<mixed>
     */
    public static function count(): Fields\FindFoldersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindFoldersResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindFoldersResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet>
     */
    public static function folders(): Fields\FindFoldersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindFoldersResultTypeField::folders();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Folder> $folders
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
        if (array_key_exists('count', $data)) {
            $self->count = $data['count'];
        }
        if (array_key_exists('folders', $data)) {
            $self->folders = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Folder::fromArray($data);
            }, $data['folders'] ?? []);
        }

        return $self;
    }
}
