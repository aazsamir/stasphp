<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapedMovie implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $stored_id;
    public ?string $name;
    public ?string $aliases;
    public ?string $duration;
    public ?string $date;
    public ?string $rating;
    public ?string $director;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $synopsis;
    public ?ScrapedStudio $studio;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedTag> */
    public ?array $tags;
    public ?string $front_image;
    public ?string $back_image;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function stored_id(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::stored_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function name(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function aliases(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function duration(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function date(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function rating(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::rating();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function director(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function url(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function urls(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function synopsis(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::synopsis();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function studio(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function front_image(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::front_image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField<mixed>
     */
    public static function back_image(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedMovieField::back_image();
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
        ?string $url = null,
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
        $self->url = $url;
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
        if (array_key_exists('url', $data)) {
            $self->url = $data['url'];
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
