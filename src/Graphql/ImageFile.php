<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

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

    /** @var array<\Aazsamir\Stasphp\Graphpql\Fingerprint> */
    public array $fingerprints;
    public string $format;
    public int $width;
    public int $height;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function id(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function path(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function basename(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::basename();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function parent_folder_id(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::parent_folder_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function zip_file_id(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::zip_file_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<\Aazsamir\Stasphp\Graphpql\SelectionSet\FolderSelectionSet>
     */
    public static function parent_folder(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::parent_folder();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<\Aazsamir\Stasphp\Graphpql\SelectionSet\BasicFileSelectionSet>
     */
    public static function zip_file(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::zip_file();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function mod_time(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::mod_time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function size(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function fingerprint(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::fingerprint();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<\Aazsamir\Stasphp\Graphpql\SelectionSet\FingerprintSelectionSet>
     */
    public static function fingerprints(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::fingerprints();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function format(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::format();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function width(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::width();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function height(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::height();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function created_at(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField<mixed>
     */
    public static function updated_at(): Fields\ImageFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileField::updated_at();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\Fingerprint> $fingerprints
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
            $self->parent_folder = \Aazsamir\Stasphp\Graphpql\Folder::fromArray($data['parent_folder']);
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

                return \Aazsamir\Stasphp\Graphpql\Fingerprint::fromArray($data);
            }, $data['fingerprints'] ?? []);
        }
        if (isset($data['format'])) {
            $self->format = $data['format'];
        }
        if (isset($data['width'])) {
            $self->width = $data['width'];
        }
        if (isset($data['height'])) {
            $self->height = $data['height'];
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
            $self->zip_file = \Aazsamir\Stasphp\Graphpql\BasicFile::fromArray($data['zip_file']);
        }
        if (isset($data['fingerprint'])) {
            $self->fingerprint = $data['fingerprint'];
        }

        return $self;
    }
}
