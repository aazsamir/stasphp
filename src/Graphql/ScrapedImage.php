<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ScrapedImage implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $title;
    public ?string $code;
    public ?string $details;
    public ?string $photographer;

    /** @var array<string> */
    public ?array $urls;
    public ?string $date;
    public ?ScrapedStudio $studio;

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> */
    public ?array $tags;

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedPerformer> */
    public ?array $performers;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<mixed>
     */
    public static function title(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<mixed>
     */
    public static function code(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<mixed>
     */
    public static function details(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<mixed>
     */
    public static function photographer(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::photographer();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<mixed>
     */
    public static function urls(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<mixed>
     */
    public static function date(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function studio(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedPerformerSelectionSet>
     */
    public static function performers(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedImageField::performers();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> $tags
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedPerformer> $performers
     */
    public static function new(
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $photographer = null,
        ?array $urls = null,
        ?string $date = null,
        ?ScrapedStudio $studio = null,
        ?array $tags = null,
        ?array $performers = null,
    ): self {
        $self = new self();
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->photographer = $photographer;
        $self->urls = $urls;
        $self->date = $date;
        $self->studio = $studio;
        $self->tags = $tags;
        $self->performers = $performers;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['code'])) {
            $self->code = $data['code'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['photographer'])) {
            $self->photographer = $data['photographer'];
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
        }
        if (isset($data['studio'])) {
            $self->studio = \Aazsamir\Stasphp\Graphpql\ScrapedStudio::fromArray($data['studio']);
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['performers'])) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\ScrapedPerformer::fromArray($data);
            }, $data['performers'] ?? []);
        }

        return $self;
    }
}
