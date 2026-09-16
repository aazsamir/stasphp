<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapedGroup implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $stored_id;
    public ?string $name;
    public ?string $aliases;
    public ?string $duration;
    public ?string $date;
    public ?string $rating;
    public ?string $director;

    /** @var array<string> */
    public ?array $urls;
    public ?string $synopsis;
    public ?ScrapedStudio $studio;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedTag> */
    public ?array $tags;
    public ?string $front_image;
    public ?string $back_image;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function stored_id(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::stored_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function name(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function aliases(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function duration(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function date(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function rating(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::rating();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function director(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function urls(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function synopsis(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::synopsis();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function studio(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function front_image(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::front_image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField<mixed>
     */
    public static function back_image(): Fields\ScrapedGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedGroupField::back_image();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedTag> $tags
     */
    public static function new(
        ?string $stored_id = null,
        ?string $name = null,
        ?string $aliases = null,
        ?string $duration = null,
        ?string $date = null,
        ?string $rating = null,
        ?string $director = null,
        ?array $urls = null,
        ?string $synopsis = null,
        ?ScrapedStudio $studio = null,
        ?array $tags = null,
        ?string $front_image = null,
        ?string $back_image = null,
    ): self {
        $self = new self();
        $self->stored_id = $stored_id;
        $self->name = $name;
        $self->aliases = $aliases;
        $self->duration = $duration;
        $self->date = $date;
        $self->rating = $rating;
        $self->director = $director;
        $self->urls = $urls;
        $self->synopsis = $synopsis;
        $self->studio = $studio;
        $self->tags = $tags;
        $self->front_image = $front_image;
        $self->back_image = $back_image;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('stored_id', $data)) {
            $self->stored_id = $data['stored_id'];
        }
        if (array_key_exists('name', $data)) {
            $self->name = $data['name'];
        }
        if (array_key_exists('aliases', $data)) {
            $self->aliases = $data['aliases'];
        }
        if (array_key_exists('duration', $data)) {
            $self->duration = $data['duration'];
        }
        if (array_key_exists('date', $data)) {
            $self->date = $data['date'];
        }
        if (array_key_exists('rating', $data)) {
            $self->rating = $data['rating'];
        }
        if (array_key_exists('director', $data)) {
            $self->director = $data['director'];
        }
        if (array_key_exists('urls', $data)) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (array_key_exists('synopsis', $data)) {
            $self->synopsis = $data['synopsis'];
        }
        if (array_key_exists('studio', $data)) {
            $self->studio = \Aazsamir\Stasphp\Graphql\ScrapedStudio::fromArray($data['studio']);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (array_key_exists('front_image', $data)) {
            $self->front_image = $data['front_image'];
        }
        if (array_key_exists('back_image', $data)) {
            $self->back_image = $data['back_image'];
        }

        return $self;
    }
}
