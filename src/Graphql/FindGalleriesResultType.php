<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindGalleriesResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphql\Gallery> */
    public array $galleries;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindGalleriesResultTypeField<mixed>
     */
    public static function count(): Fields\FindGalleriesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindGalleriesResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindGalleriesResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\GallerySelectionSet>
     */
    public static function galleries(): Fields\FindGalleriesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindGalleriesResultTypeField::galleries();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Gallery> $galleries
     */
    public static function new(int $count, array $galleries): self
    {
        $self = new self();
        $self->count = $count;
        $self->galleries = $galleries;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['galleries'])) {
            $self->galleries = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Gallery::fromArray($data);
            }, $data['galleries'] ?? []);
        }

        return $self;
    }
}
