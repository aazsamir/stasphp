<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedTag> */
    public ?array $tags;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedPerformer> */
    public ?array $performers;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<mixed>
     */
    public static function title(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<mixed>
     */
    public static function code(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<mixed>
     */
    public static function details(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<mixed>
     */
    public static function photographer(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::photographer();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<mixed>
     */
    public static function urls(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<mixed>
     */
    public static function date(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function studio(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedPerformerSelectionSet>
     */
    public static function performers(): Fields\ScrapedImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedImageField::performers();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedTag> $tags
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedPerformer> $performers
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
            $self->studio = \Aazsamir\Stasphp\Graphql\ScrapedStudio::fromArray($data['studio']);
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['performers'])) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedPerformer::fromArray($data);
            }, $data['performers'] ?? []);
        }

        return $self;
    }
}
