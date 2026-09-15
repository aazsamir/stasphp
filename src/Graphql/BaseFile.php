<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class BaseFile implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $path;
    public string $basename;
    public string $parent_folder_id;
    public ?string $zip_file_id;
    public Folder $parent_folder;
    public ?BasicFile $zip_file;
    public \DateTimeInterface $mod_time;
    public int $size;
    public ?string $fingerprint;

    /** @var array<\Aazsamir\Stasphp\Graphql\Fingerprint> */
    public array $fingerprints;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function id(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function path(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function basename(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::basename();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function parent_folder_id(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::parent_folder_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function zip_file_id(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::zip_file_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<\Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet>
     */
    public static function parent_folder(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::parent_folder();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<\Aazsamir\Stasphp\Graphql\SelectionSet\BasicFileSelectionSet>
     */
    public static function zip_file(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::zip_file();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function mod_time(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::mod_time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function size(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function fingerprint(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::fingerprint();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<\Aazsamir\Stasphp\Graphql\SelectionSet\FingerprintSelectionSet>
     */
    public static function fingerprints(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::fingerprints();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function created_at(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField<mixed>
     */
    public static function updated_at(): Fields\BaseFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\BaseFileField::updated_at();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Fingerprint> $fingerprints
     */
    public static function new(
        string $id,
        string $path,
        string $basename,
        string $parent_folder_id,
        Folder $parent_folder,
        \DateTimeInterface $mod_time,
        int $size,
        array $fingerprints,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        ?string $zip_file_id = null,
        ?BasicFile $zip_file = null,
        ?string $fingerprint = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->path = $path;
        $self->basename = $basename;
        $self->parent_folder_id = $parent_folder_id;
        $self->parent_folder = $parent_folder;
        $self->mod_time = $mod_time;
        $self->size = $size;
        $self->fingerprints = $fingerprints;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->zip_file_id = $zip_file_id;
        $self->zip_file = $zip_file;
        $self->fingerprint = $fingerprint;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['path'])) {
            $self->path = $data['path'];
        }
        if (isset($data['basename'])) {
            $self->basename = $data['basename'];
        }
        if (isset($data['parent_folder_id'])) {
            $self->parent_folder_id = $data['parent_folder_id'];
        }
        if (isset($data['parent_folder'])) {
            $self->parent_folder = \Aazsamir\Stasphp\Graphql\Folder::fromArray($data['parent_folder']);
        }
        if (isset($data['mod_time'])) {
            $self->mod_time = new \DateTimeImmutable($data['mod_time']);
        }
        if (isset($data['size'])) {
            $self->size = $data['size'];
        }
        if (isset($data['fingerprints'])) {
            $self->fingerprints = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Fingerprint::fromArray($data);
            }, $data['fingerprints'] ?? []);
        }
        if (isset($data['created_at'])) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (isset($data['zip_file_id'])) {
            $self->zip_file_id = $data['zip_file_id'];
        }
        if (isset($data['zip_file'])) {
            $self->zip_file = \Aazsamir\Stasphp\Graphql\BasicFile::fromArray($data['zip_file']);
        }
        if (isset($data['fingerprint'])) {
            $self->fingerprint = $data['fingerprint'];
        }

        return $self;
    }
}
