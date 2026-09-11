<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class GalleryRemoveInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $gallery_id;

    /** @var array<string> */
    public array $image_ids;

    /**
     * @param array<string> $image_ids
     */
    public static function new(string $gallery_id, array $image_ids): self
    {
        $self = new self();
        $self->gallery_id = $gallery_id;
        $self->image_ids = $image_ids;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['gallery_id'])) {
            $self->gallery_id = $data['gallery_id'];
        }
        if (isset($data['image_ids'])) {
            $self->image_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['image_ids'] ?? []);
        }

        return $self;
    }
}
