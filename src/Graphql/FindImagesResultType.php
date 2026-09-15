<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindImagesResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;
    public float $megapixels;
    public float $filesize;

    /** @var array<\Aazsamir\Stasphp\Graphql\Image> */
    public array $images;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindImagesResultTypeField<mixed>
     */
    public static function count(): Fields\FindImagesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindImagesResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindImagesResultTypeField<mixed>
     */
    public static function megapixels(): Fields\FindImagesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindImagesResultTypeField::megapixels();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindImagesResultTypeField<mixed>
     */
    public static function filesize(): Fields\FindImagesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindImagesResultTypeField::filesize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindImagesResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\ImageSelectionSet>
     */
    public static function images(): Fields\FindImagesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindImagesResultTypeField::images();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Image> $images
     */
    public static function new(int $count, float $megapixels, float $filesize, array $images): self
    {
        $self = new self();
        $self->count = $count;
        $self->megapixels = $megapixels;
        $self->filesize = $filesize;
        $self->images = $images;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['megapixels'])) {
            $self->megapixels = $data['megapixels'];
        }
        if (isset($data['filesize'])) {
            $self->filesize = $data['filesize'];
        }
        if (isset($data['images'])) {
            $self->images = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Image::fromArray($data);
            }, $data['images'] ?? []);
        }

        return $self;
    }
}
