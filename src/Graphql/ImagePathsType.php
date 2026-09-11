<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ImagePathsType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $thumbnail;
    public ?string $preview;
    public ?string $image;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImagePathsTypeField<mixed>
     */
    public static function thumbnail(): Fields\ImagePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImagePathsTypeField::thumbnail();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImagePathsTypeField<mixed>
     */
    public static function preview(): Fields\ImagePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImagePathsTypeField::preview();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImagePathsTypeField<mixed>
     */
    public static function image(): Fields\ImagePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImagePathsTypeField::image();
    }

    public static function new(?string $thumbnail = null, ?string $preview = null, ?string $image = null): self
    {
        $self = new self();
        $self->thumbnail = $thumbnail;
        $self->preview = $preview;
        $self->image = $image;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['thumbnail'])) {
            $self->thumbnail = $data['thumbnail'];
        }
        if (isset($data['preview'])) {
            $self->preview = $data['preview'];
        }
        if (isset($data['image'])) {
            $self->image = $data['image'];
        }

        return $self;
    }
}
