<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ImagePathsType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $thumbnail;
    public ?string $preview;
    public ?string $image;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImagePathsTypeField<mixed>
     */
    public static function thumbnail(): Fields\ImagePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImagePathsTypeField::thumbnail();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImagePathsTypeField<mixed>
     */
    public static function preview(): Fields\ImagePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImagePathsTypeField::preview();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImagePathsTypeField<mixed>
     */
    public static function image(): Fields\ImagePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImagePathsTypeField::image();
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
        if (array_key_exists('thumbnail', $data)) {
            $self->thumbnail = $data['thumbnail'];
        }
        if (array_key_exists('preview', $data)) {
            $self->preview = $data['preview'];
        }
        if (array_key_exists('image', $data)) {
            $self->image = $data['image'];
        }

        return $self;
    }
}
