<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GalleryChapterUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?string $gallery_id;
    public ?string $title;
    public ?int $image_index;

    public static function new(
        string $id,
        ?string $gallery_id = null,
        ?string $title = null,
        ?int $image_index = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->gallery_id = $gallery_id;
        $self->title = $title;
        $self->image_index = $image_index;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['gallery_id'])) {
            $self->gallery_id = $data['gallery_id'];
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['image_index'])) {
            $self->image_index = $data['image_index'];
        }

        return $self;
    }
}
