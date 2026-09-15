<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashConfigInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $path;
    public bool $excludeVideo;
    public bool $excludeImage;

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
