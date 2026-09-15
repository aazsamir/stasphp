<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GalleryResetCoverInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $gallery_id;

    public static function new(string $gallery_id): self
    {
        $self = new self();
        $self->gallery_id = $gallery_id;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['gallery_id'])) {
            $self->gallery_id = $data['gallery_id'];
        }

        return $self;
    }
}
