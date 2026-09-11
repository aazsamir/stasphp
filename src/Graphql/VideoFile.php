<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class VideoFile implements \Aazsamir\Graphpql\Model\GraphObject
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
    public float $duration;
    public string $video_codec;
    public string $audio_codec;
    public float $frame_rate;
    public int $bit_rate;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function id(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function path(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function basename(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::basename();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function parent_folder_id(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::parent_folder_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function zip_file_id(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::zip_file_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<\Aazsamir\Stasphp\Graphpql\SelectionSet\FolderSelectionSet>
     */
    public static function parent_folder(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::parent_folder();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<\Aazsamir\Stasphp\Graphpql\SelectionSet\BasicFileSelectionSet>
     */
    public static function zip_file(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::zip_file();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function mod_time(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::mod_time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function size(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function fingerprint(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::fingerprint();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<\Aazsamir\Stasphp\Graphpql\SelectionSet\FingerprintSelectionSet>
     */
    public static function fingerprints(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::fingerprints();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function format(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::format();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function width(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::width();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function height(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::height();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function duration(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function video_codec(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::video_codec();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function audio_codec(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::audio_codec();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function frame_rate(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::frame_rate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function bit_rate(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::bit_rate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function created_at(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField<mixed>
     */
    public static function updated_at(): Fields\VideoFileField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoFileField::updated_at();
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
        float $duration,
        string $video_codec,
        string $audio_codec,
        float $frame_rate,
        int $bit_rate,
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
        $self->duration = $duration;
        $self->video_codec = $video_codec;
        $self->audio_codec = $audio_codec;
        $self->frame_rate = $frame_rate;
        $self->bit_rate = $bit_rate;
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
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }
        if (isset($data['video_codec'])) {
            $self->video_codec = $data['video_codec'];
        }
        if (isset($data['audio_codec'])) {
            $self->audio_codec = $data['audio_codec'];
        }
        if (isset($data['frame_rate'])) {
            $self->frame_rate = $data['frame_rate'];
        }
        if (isset($data['bit_rate'])) {
            $self->bit_rate = $data['bit_rate'];
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
