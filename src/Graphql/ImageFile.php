<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ImageFile implements \Aazsamir\Graphpql\Model\GraphObject
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
    public string $format;
    public int $width;
    public int $height;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function id(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function path(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function basename(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::basename();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function parent_folder_id(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::parent_folder_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function zip_file_id(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::zip_file_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<\Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet>
     */
    public static function parent_folder(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::parent_folder();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<\Aazsamir\Stasphp\Graphql\SelectionSet\BasicFileSelectionSet>
     */
    public static function zip_file(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::zip_file();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function mod_time(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::mod_time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function size(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function fingerprint(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::fingerprint();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<\Aazsamir\Stasphp\Graphql\SelectionSet\FingerprintSelectionSet>
     */
    public static function fingerprints(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::fingerprints();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function format(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::format();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function width(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::width();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function height(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::height();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function created_at(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField<mixed>
     */
    public static function updated_at(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageFileField::updated_at();
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
        string $format,
        int $width,
        int $height,
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
        $self->format = $format;
        $self->width = $width;
        $self->height = $height;
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
        if (array_key_exists('id', $data)) {
            $self->id = $data['id'];
        }
        if (array_key_exists('path', $data)) {
            $self->path = $data['path'];
        }
        if (array_key_exists('basename', $data)) {
            $self->basename = $data['basename'];
        }
        if (array_key_exists('parent_folder_id', $data)) {
            $self->parent_folder_id = $data['parent_folder_id'];
        }
        if (array_key_exists('parent_folder', $data)) {
            $self->parent_folder = \Aazsamir\Stasphp\Graphql\Folder::fromArray($data['parent_folder']);
        }
        if (array_key_exists('mod_time', $data)) {
            $self->mod_time = new \DateTimeImmutable($data['mod_time']);
        }
        if (array_key_exists('size', $data)) {
            $self->size = $data['size'];
        }
        if (array_key_exists('fingerprints', $data)) {
            $self->fingerprints = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Fingerprint::fromArray($data);
            }, $data['fingerprints'] ?? []);
        }
        if (array_key_exists('format', $data)) {
            $self->format = $data['format'];
        }
        if (array_key_exists('width', $data)) {
            $self->width = $data['width'];
        }
        if (array_key_exists('height', $data)) {
            $self->height = $data['height'];
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (array_key_exists('zip_file_id', $data)) {
            $self->zip_file_id = $data['zip_file_id'];
        }
        if (array_key_exists('zip_file', $data)) {
            $self->zip_file = \Aazsamir\Stasphp\Graphql\BasicFile::fromArray($data['zip_file']);
        }
        if (array_key_exists('fingerprint', $data)) {
            $self->fingerprint = $data['fingerprint'];
        }

        return $self;
    }
}
