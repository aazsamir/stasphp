<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Folder implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $path;
    public string $basename;
    public ?string $parent_folder_id;
    public ?string $zip_file_id;
    public ?Folder $parent_folder;

    /** @var array<\Aazsamir\Stasphp\Graphql\Folder> */
    public array $parent_folders;
    public ?BasicFile $zip_file;

    /** @var array<\Aazsamir\Stasphp\Graphql\Folder> */
    public array $sub_folders;
    public \DateTimeInterface $mod_time;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<mixed>
     */
    public static function id(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<mixed>
     */
    public static function path(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<mixed>
     */
    public static function basename(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::basename();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<mixed>
     */
    public static function parent_folder_id(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::parent_folder_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<mixed>
     */
    public static function zip_file_id(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::zip_file_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<\Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet>
     */
    public static function parent_folder(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::parent_folder();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<\Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet>
     */
    public static function parent_folders(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::parent_folders();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<\Aazsamir\Stasphp\Graphql\SelectionSet\BasicFileSelectionSet>
     */
    public static function zip_file(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::zip_file();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<\Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet>
     */
    public static function sub_folders(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::sub_folders();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<mixed>
     */
    public static function mod_time(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::mod_time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<mixed>
     */
    public static function created_at(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FolderField<mixed>
     */
    public static function updated_at(): Fields\FolderField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FolderField::updated_at();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Folder> $parent_folders
     * @param array<\Aazsamir\Stasphp\Graphql\Folder> $sub_folders
     */
    public static function new(
        string $id,
        string $path,
        string $basename,
        array $parent_folders,
        array $sub_folders,
        \DateTimeInterface $mod_time,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        ?string $parent_folder_id = null,
        ?string $zip_file_id = null,
        ?Folder $parent_folder = null,
        ?BasicFile $zip_file = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->path = $path;
        $self->basename = $basename;
        $self->parent_folders = $parent_folders;
        $self->sub_folders = $sub_folders;
        $self->mod_time = $mod_time;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->parent_folder_id = $parent_folder_id;
        $self->zip_file_id = $zip_file_id;
        $self->parent_folder = $parent_folder;
        $self->zip_file = $zip_file;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('id', $data)) {
            $self->id = $data['id'];
        }
        if (array_key_exists('path', $data)) {
            $self->path = $data['path'];
        }
        if (array_key_exists('basename', $data)) {
            $self->basename = $data['basename'];
        }
        if (array_key_exists('parent_folders', $data)) {
            $self->parent_folders = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Folder::fromArray($data);
            }, $data['parent_folders'] ?? []);
        }
        if (array_key_exists('sub_folders', $data)) {
            $self->sub_folders = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Folder::fromArray($data);
            }, $data['sub_folders'] ?? []);
        }
        if (array_key_exists('mod_time', $data)) {
            $self->mod_time = new \DateTimeImmutable($data['mod_time']);
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (array_key_exists('parent_folder_id', $data)) {
            $self->parent_folder_id = $data['parent_folder_id'];
        }
        if (array_key_exists('zip_file_id', $data)) {
            $self->zip_file_id = $data['zip_file_id'];
        }
        if (array_key_exists('parent_folder', $data)) {
            $self->parent_folder = \Aazsamir\Stasphp\Graphql\Folder::fromArray($data['parent_folder']);
        }
        if (array_key_exists('zip_file', $data)) {
            $self->zip_file = \Aazsamir\Stasphp\Graphql\BasicFile::fromArray($data['zip_file']);
        }

        return $self;
    }
}
