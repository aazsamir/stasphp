<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class GalleryChapterCreateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $gallery_id;
    public string $title;
    public int $image_index;

    public static function new(string $gallery_id, string $title, int $image_index): self
    {
        $self = new self();
        $self->gallery_id = $gallery_id;
        $self->title = $title;
        $self->image_index = $image_index;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
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
