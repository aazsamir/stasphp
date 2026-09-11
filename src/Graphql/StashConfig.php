<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class StashConfig implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $path;
    public bool $excludeVideo;
    public bool $excludeImage;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StashConfigField<mixed>
     */
    public static function path(): Fields\StashConfigField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StashConfigField::path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StashConfigField<mixed>
     */
    public static function excludeVideo(): Fields\StashConfigField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StashConfigField::excludeVideo();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StashConfigField<mixed>
     */
    public static function excludeImage(): Fields\StashConfigField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StashConfigField::excludeImage();
    }

    public static function new(string $path, bool $excludeVideo, bool $excludeImage): self
    {
        $self = new self();
        $self->path = $path;
        $self->excludeVideo = $excludeVideo;
        $self->excludeImage = $excludeImage;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['path'])) {
            $self->path = $data['path'];
        }
        if (isset($data['excludeVideo'])) {
            $self->excludeVideo = $data['excludeVideo'];
        }
        if (isset($data['excludeImage'])) {
            $self->excludeImage = $data['excludeImage'];
        }

        return $self;
    }
}
