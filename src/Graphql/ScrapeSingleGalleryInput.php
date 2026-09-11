<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ScrapeSingleGalleryInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $query;
    public ?string $gallery_id;
    public ?ScrapedGalleryInput $gallery_input;

    public static function new(
        ?string $query = null,
        ?string $gallery_id = null,
        ?ScrapedGalleryInput $gallery_input = null,
    ): self {
        $self = new self();
        $self->query = $query;
        $self->gallery_id = $gallery_id;
        $self->gallery_input = $gallery_input;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['query'])) {
            $self->query = $data['query'];
        }
        if (isset($data['gallery_id'])) {
            $self->gallery_id = $data['gallery_id'];
        }
        if (isset($data['gallery_input'])) {
            $self->gallery_input = \Aazsamir\Stasphp\Graphpql\ScrapedGalleryInput::fromArray($data['gallery_input']);
        }

        return $self;
    }
}
