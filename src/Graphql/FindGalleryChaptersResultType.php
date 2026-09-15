<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindGalleryChaptersResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphql\GalleryChapter> */
    public array $chapters;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindGalleryChaptersResultTypeField<mixed>
     */
    public static function count(): Fields\FindGalleryChaptersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindGalleryChaptersResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindGalleryChaptersResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\GalleryChapterSelectionSet>
     */
    public static function chapters(): Fields\FindGalleryChaptersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindGalleryChaptersResultTypeField::chapters();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\GalleryChapter> $chapters
     */
    public static function new(int $count, array $chapters): self
    {
        $self = new self();
        $self->count = $count;
        $self->chapters = $chapters;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['chapters'])) {
            $self->chapters = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\GalleryChapter::fromArray($data);
            }, $data['chapters'] ?? []);
        }

        return $self;
    }
}
