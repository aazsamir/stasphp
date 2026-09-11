<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindGalleryChaptersResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphpql\GalleryChapter> */
    public array $chapters;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindGalleryChaptersResultTypeField<mixed>
     */
    public static function count(): Fields\FindGalleryChaptersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindGalleryChaptersResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindGalleryChaptersResultTypeField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GalleryChapterSelectionSet>
     */
    public static function chapters(): Fields\FindGalleryChaptersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindGalleryChaptersResultTypeField::chapters();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\GalleryChapter> $chapters
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

                return \Aazsamir\Stasphp\Graphpql\GalleryChapter::fromArray($data);
            }, $data['chapters'] ?? []);
        }

        return $self;
    }
}
