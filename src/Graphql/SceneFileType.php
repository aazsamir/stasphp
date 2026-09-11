<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneFileType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $size;
    public ?float $duration;
    public ?string $video_codec;
    public ?string $audio_codec;
    public ?int $width;
    public ?int $height;
    public ?float $framerate;
    public ?int $bitrate;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField<mixed>
     */
    public static function size(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField::size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField<mixed>
     */
    public static function duration(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField<mixed>
     */
    public static function video_codec(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField::video_codec();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField<mixed>
     */
    public static function audio_codec(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField::audio_codec();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField<mixed>
     */
    public static function width(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField::width();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField<mixed>
     */
    public static function height(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField::height();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField<mixed>
     */
    public static function framerate(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField::framerate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField<mixed>
     */
    public static function bitrate(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneFileTypeField::bitrate();
    }

    public static function new(
        ?string $size = null,
        ?float $duration = null,
        ?string $video_codec = null,
        ?string $audio_codec = null,
        ?int $width = null,
        ?int $height = null,
        ?float $framerate = null,
        ?int $bitrate = null,
    ): self {
        $self = new self();
        $self->size = $size;
        $self->duration = $duration;
        $self->video_codec = $video_codec;
        $self->audio_codec = $audio_codec;
        $self->width = $width;
        $self->height = $height;
        $self->framerate = $framerate;
        $self->bitrate = $bitrate;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['size'])) {
            $self->size = $data['size'];
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
        if (isset($data['width'])) {
            $self->width = $data['width'];
        }
        if (isset($data['height'])) {
            $self->height = $data['height'];
        }
        if (isset($data['framerate'])) {
            $self->framerate = $data['framerate'];
        }
        if (isset($data['bitrate'])) {
            $self->bitrate = $data['bitrate'];
        }

        return $self;
    }
}
