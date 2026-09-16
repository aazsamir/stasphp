<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField<mixed>
     */
    public static function size(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField::size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField<mixed>
     */
    public static function duration(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField<mixed>
     */
    public static function video_codec(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField::video_codec();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField<mixed>
     */
    public static function audio_codec(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField::audio_codec();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField<mixed>
     */
    public static function width(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField::width();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField<mixed>
     */
    public static function height(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField::height();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField<mixed>
     */
    public static function framerate(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField::framerate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField<mixed>
     */
    public static function bitrate(): Fields\SceneFileTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneFileTypeField::bitrate();
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
        if (array_key_exists('size', $data)) {
            $self->size = $data['size'];
        }
        if (array_key_exists('duration', $data)) {
            $self->duration = $data['duration'];
        }
        if (array_key_exists('video_codec', $data)) {
            $self->video_codec = $data['video_codec'];
        }
        if (array_key_exists('audio_codec', $data)) {
            $self->audio_codec = $data['audio_codec'];
        }
        if (array_key_exists('width', $data)) {
            $self->width = $data['width'];
        }
        if (array_key_exists('height', $data)) {
            $self->height = $data['height'];
        }
        if (array_key_exists('framerate', $data)) {
            $self->framerate = $data['framerate'];
        }
        if (array_key_exists('bitrate', $data)) {
            $self->bitrate = $data['bitrate'];
        }

        return $self;
    }
}
