<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindImagesResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;
    public float $megapixels;
    public float $filesize;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Image> */
    public array $images;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindImagesResultTypeField<mixed>
     */
    public static function count(): Fields\FindImagesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindImagesResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindImagesResultTypeField<mixed>
     */
    public static function megapixels(): Fields\FindImagesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindImagesResultTypeField::megapixels();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindImagesResultTypeField<mixed>
     */
    public static function filesize(): Fields\FindImagesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindImagesResultTypeField::filesize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindImagesResultTypeField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ImageSelectionSet>
     */
    public static function images(): Fields\FindImagesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindImagesResultTypeField::images();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\Image> $images
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

                return \Aazsamir\Stasphp\Graphpql\Image::fromArray($data);
            }, $data['images'] ?? []);
        }

        return $self;
    }
}
