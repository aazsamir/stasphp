<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class GalleryChapter implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public Gallery $gallery;
    public string $title;
    public int $image_index;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField<mixed>
     */
    public static function id(): Fields\GalleryChapterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GallerySelectionSet>
     */
    public static function gallery(): Fields\GalleryChapterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField::gallery();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField<mixed>
     */
    public static function title(): Fields\GalleryChapterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField<mixed>
     */
    public static function image_index(): Fields\GalleryChapterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField::image_index();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField<mixed>
     */
    public static function created_at(): Fields\GalleryChapterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField<mixed>
     */
    public static function updated_at(): Fields\GalleryChapterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GalleryChapterField::updated_at();
    }

    public static function new(
        string $id,
        Gallery $gallery,
        string $title,
        int $image_index,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->gallery = $gallery;
        $self->title = $title;
        $self->image_index = $image_index;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['gallery'])) {
            $self->gallery = \Aazsamir\Stasphp\Graphpql\Gallery::fromArray($data['gallery']);
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['image_index'])) {
            $self->image_index = $data['image_index'];
        }
        if (isset($data['created_at'])) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }

        return $self;
    }
}
