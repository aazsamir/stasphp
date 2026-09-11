<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

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

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> */
    public ?array $tags;
    public ?string $front_image;
    public ?string $back_image;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function stored_id(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::stored_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function name(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function aliases(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function duration(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function date(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function rating(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::rating();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function director(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function url(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function urls(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function synopsis(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::synopsis();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function studio(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function front_image(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::front_image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField<mixed>
     */
    public static function back_image(): Fields\ScrapedMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedMovieField::back_image();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> $tags
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
        if (isset($data['stored_id'])) {
            $self->stored_id = $data['stored_id'];
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['aliases'])) {
            $self->aliases = $data['aliases'];
        }
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
        }
        if (isset($data['rating'])) {
            $self->rating = $data['rating'];
        }
        if (isset($data['director'])) {
            $self->director = $data['director'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['synopsis'])) {
            $self->synopsis = $data['synopsis'];
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
        if (isset($data['front_image'])) {
            $self->front_image = $data['front_image'];
        }
        if (isset($data['back_image'])) {
            $self->back_image = $data['back_image'];
        }

        return $self;
    }
}
