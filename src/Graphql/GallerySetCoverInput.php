<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class GallerySetCoverInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $gallery_id;
    public string $cover_image_id;

    public static function new(string $gallery_id, string $cover_image_id): self
    {
        $self = new self();
        $self->gallery_id = $gallery_id;
        $self->cover_image_id = $cover_image_id;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['gallery_id'])) {
            $self->gallery_id = $data['gallery_id'];
        }
        if (isset($data['cover_image_id'])) {
            $self->cover_image_id = $data['cover_image_id'];
        }

        return $self;
    }
}
