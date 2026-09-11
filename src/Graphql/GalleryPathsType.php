<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class GalleryPathsType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $cover;
    public string $preview;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GalleryPathsTypeField<mixed>
     */
    public static function cover(): Fields\GalleryPathsTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GalleryPathsTypeField::cover();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GalleryPathsTypeField<mixed>
     */
    public static function preview(): Fields\GalleryPathsTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GalleryPathsTypeField::preview();
    }

    public static function new(string $cover, string $preview): self
    {
        $self = new self();
        $self->cover = $cover;
        $self->preview = $preview;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['cover'])) {
            $self->cover = $data['cover'];
        }
        if (isset($data['preview'])) {
            $self->preview = $data['preview'];
        }

        return $self;
    }
}
