<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Directory implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $path;
    public ?string $parent;

    /** @var array<string> */
    public array $directories;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\DirectoryField<mixed>
     */
    public static function path(): Fields\DirectoryField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\DirectoryField::path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\DirectoryField<mixed>
     */
    public static function parent(): Fields\DirectoryField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\DirectoryField::parent();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\DirectoryField<mixed>
     */
    public static function directories(): Fields\DirectoryField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\DirectoryField::directories();
    }

    /**
     * @param array<string> $directories
     */
    public static function new(string $path, array $directories, ?string $parent = null): self
    {
        $self = new self();
        $self->path = $path;
        $self->directories = $directories;
        $self->parent = $parent;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['path'])) {
            $self->path = $data['path'];
        }
        if (isset($data['directories'])) {
            $self->directories = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['directories'] ?? []);
        }
        if (isset($data['parent'])) {
            $self->parent = $data['parent'];
        }

        return $self;
    }
}
