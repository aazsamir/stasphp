<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Movie implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $name;
    public ?string $aliases;
    public ?int $duration;
    public ?string $date;
    public ?int $rating100;
    public ?Studio $studio;
    public ?string $director;
    public ?string $synopsis;
    public ?string $url;

    /** @var array<string> */
    public array $urls;

    /** @var array<\Aazsamir\Stasphp\Graphql\Tag> */
    public array $tags;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;
    public ?string $front_image_path;
    public ?string $back_image_path;
    public int $scene_count;

    /** @var array<\Aazsamir\Stasphp\Graphql\Scene> */
    public array $scenes;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function id(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function name(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function aliases(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function duration(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function date(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function rating100(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::rating100();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<\Aazsamir\Stasphp\Graphql\SelectionSet\StudioSelectionSet>
     */
    public static function studio(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function director(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function synopsis(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::synopsis();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function url(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function urls(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<\Aazsamir\Stasphp\Graphql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function created_at(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function updated_at(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function front_image_path(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::front_image_path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function back_image_path(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::back_image_path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<mixed>
     */
    public static function scene_count(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::scene_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\MovieField<\Aazsamir\Stasphp\Graphql\SelectionSet\SceneSelectionSet>
     */
    public static function scenes(): Fields\MovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\MovieField::scenes();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\Tag> $tags
     * @param array<\Aazsamir\Stasphp\Graphql\Scene> $scenes
     */
    public static function new(
        string $id,
        string $name,
        array $urls,
        array $tags,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        int $scene_count,
        array $scenes,
        ?string $aliases = null,
        ?int $duration = null,
        ?string $date = null,
        ?int $rating100 = null,
        ?Studio $studio = null,
        ?string $director = null,
        ?string $synopsis = null,
        ?string $url = null,
        ?string $front_image_path = null,
        ?string $back_image_path = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->urls = $urls;
        $self->tags = $tags;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->scene_count = $scene_count;
        $self->scenes = $scenes;
        $self->aliases = $aliases;
        $self->duration = $duration;
        $self->date = $date;
        $self->rating100 = $rating100;
        $self->studio = $studio;
        $self->director = $director;
        $self->synopsis = $synopsis;
        $self->url = $url;
        $self->front_image_path = $front_image_path;
        $self->back_image_path = $back_image_path;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('id', $data)) {
            $self->id = $data['id'];
        }
        if (array_key_exists('name', $data)) {
            $self->name = $data['name'];
        }
        if (array_key_exists('urls', $data)) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (array_key_exists('scene_count', $data)) {
            $self->scene_count = $data['scene_count'];
        }
        if (array_key_exists('scenes', $data)) {
            $self->scenes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Scene::fromArray($data);
            }, $data['scenes'] ?? []);
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
        if (array_key_exists('rating100', $data)) {
            $self->rating100 = $data['rating100'];
        }
        if (array_key_exists('studio', $data)) {
            $self->studio = \Aazsamir\Stasphp\Graphql\Studio::fromArray($data['studio']);
        }
        if (array_key_exists('director', $data)) {
            $self->director = $data['director'];
        }
        if (array_key_exists('synopsis', $data)) {
            $self->synopsis = $data['synopsis'];
        }
        if (array_key_exists('url', $data)) {
            $self->url = $data['url'];
        }
        if (array_key_exists('front_image_path', $data)) {
            $self->front_image_path = $data['front_image_path'];
        }
        if (array_key_exists('back_image_path', $data)) {
            $self->back_image_path = $data['back_image_path'];
        }

        return $self;
    }
}
