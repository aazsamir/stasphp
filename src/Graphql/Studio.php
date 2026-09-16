<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Studio implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $name;
    public ?string $url;

    /** @var array<string> */
    public array $urls;
    public ?Studio $parent_studio;

    /** @var array<\Aazsamir\Stasphp\Graphql\Studio> */
    public array $child_studios;

    /** @var array<string> */
    public array $aliases;

    /** @var array<\Aazsamir\Stasphp\Graphql\Tag> */
    public array $tags;
    public bool $ignore_auto_tag;
    public bool $organized;
    public ?string $image_path;
    public int $scene_count;
    public int $image_count;
    public int $gallery_count;
    public int $performer_count;
    public int $group_count;
    public int $movie_count;

    /** @var array<\Aazsamir\Stasphp\Graphql\StashID> */
    public array $stash_ids;
    public ?int $rating100;
    public bool $favorite;
    public ?string $details;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /** @var array<\Aazsamir\Stasphp\Graphql\Group> */
    public array $groups;

    /** @var array<\Aazsamir\Stasphp\Graphql\Movie> */
    public array $movies;
    public ?int $o_counter;
    public mixed $custom_fields;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function id(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function name(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function url(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function urls(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<\Aazsamir\Stasphp\Graphql\SelectionSet\StudioSelectionSet>
     */
    public static function parent_studio(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::parent_studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<\Aazsamir\Stasphp\Graphql\SelectionSet\StudioSelectionSet>
     */
    public static function child_studios(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::child_studios();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function aliases(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<\Aazsamir\Stasphp\Graphql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function ignore_auto_tag(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::ignore_auto_tag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function organized(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::organized();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function image_path(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::image_path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function scene_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::scene_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function image_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::image_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function gallery_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::gallery_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function performer_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::performer_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function group_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::group_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function movie_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::movie_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<\Aazsamir\Stasphp\Graphql\SelectionSet\StashIDSelectionSet>
     */
    public static function stash_ids(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::stash_ids();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function rating100(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::rating100();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function favorite(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::favorite();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function details(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function created_at(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function updated_at(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<\Aazsamir\Stasphp\Graphql\SelectionSet\GroupSelectionSet>
     */
    public static function groups(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::groups();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<\Aazsamir\Stasphp\Graphql\SelectionSet\MovieSelectionSet>
     */
    public static function movies(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::movies();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function o_counter(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::o_counter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StudioField<mixed>
     */
    public static function custom_fields(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StudioField::custom_fields();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\Studio> $child_studios
     * @param array<string> $aliases
     * @param array<\Aazsamir\Stasphp\Graphql\Tag> $tags
     * @param array<\Aazsamir\Stasphp\Graphql\StashID> $stash_ids
     * @param array<\Aazsamir\Stasphp\Graphql\Group> $groups
     * @param array<\Aazsamir\Stasphp\Graphql\Movie> $movies
     */
    public static function new(
        string $id,
        string $name,
        array $urls,
        array $child_studios,
        array $aliases,
        array $tags,
        bool $ignore_auto_tag,
        bool $organized,
        int $scene_count,
        int $image_count,
        int $gallery_count,
        int $performer_count,
        int $group_count,
        int $movie_count,
        array $stash_ids,
        bool $favorite,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        array $groups,
        array $movies,
        mixed $custom_fields,
        ?string $url = null,
        ?Studio $parent_studio = null,
        ?string $image_path = null,
        ?int $rating100 = null,
        ?string $details = null,
        ?int $o_counter = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->urls = $urls;
        $self->child_studios = $child_studios;
        $self->aliases = $aliases;
        $self->tags = $tags;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->organized = $organized;
        $self->scene_count = $scene_count;
        $self->image_count = $image_count;
        $self->gallery_count = $gallery_count;
        $self->performer_count = $performer_count;
        $self->group_count = $group_count;
        $self->movie_count = $movie_count;
        $self->stash_ids = $stash_ids;
        $self->favorite = $favorite;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->groups = $groups;
        $self->movies = $movies;
        $self->custom_fields = $custom_fields;
        $self->url = $url;
        $self->parent_studio = $parent_studio;
        $self->image_path = $image_path;
        $self->rating100 = $rating100;
        $self->details = $details;
        $self->o_counter = $o_counter;

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
        if (array_key_exists('child_studios', $data)) {
            $self->child_studios = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Studio::fromArray($data);
            }, $data['child_studios'] ?? []);
        }
        if (array_key_exists('aliases', $data)) {
            $self->aliases = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['aliases'] ?? []);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (array_key_exists('ignore_auto_tag', $data)) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (array_key_exists('organized', $data)) {
            $self->organized = $data['organized'];
        }
        if (array_key_exists('scene_count', $data)) {
            $self->scene_count = $data['scene_count'];
        }
        if (array_key_exists('image_count', $data)) {
            $self->image_count = $data['image_count'];
        }
        if (array_key_exists('gallery_count', $data)) {
            $self->gallery_count = $data['gallery_count'];
        }
        if (array_key_exists('performer_count', $data)) {
            $self->performer_count = $data['performer_count'];
        }
        if (array_key_exists('group_count', $data)) {
            $self->group_count = $data['group_count'];
        }
        if (array_key_exists('movie_count', $data)) {
            $self->movie_count = $data['movie_count'];
        }
        if (array_key_exists('stash_ids', $data)) {
            $self->stash_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\StashID::fromArray($data);
            }, $data['stash_ids'] ?? []);
        }
        if (array_key_exists('favorite', $data)) {
            $self->favorite = $data['favorite'];
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (array_key_exists('groups', $data)) {
            $self->groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Group::fromArray($data);
            }, $data['groups'] ?? []);
        }
        if (array_key_exists('movies', $data)) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Movie::fromArray($data);
            }, $data['movies'] ?? []);
        }
        if (array_key_exists('custom_fields', $data)) {
            $self->custom_fields = $data['custom_fields'];
        }
        if (array_key_exists('url', $data)) {
            $self->url = $data['url'];
        }
        if (array_key_exists('parent_studio', $data)) {
            $self->parent_studio = \Aazsamir\Stasphp\Graphql\Studio::fromArray($data['parent_studio']);
        }
        if (array_key_exists('image_path', $data)) {
            $self->image_path = $data['image_path'];
        }
        if (array_key_exists('rating100', $data)) {
            $self->rating100 = $data['rating100'];
        }
        if (array_key_exists('details', $data)) {
            $self->details = $data['details'];
        }
        if (array_key_exists('o_counter', $data)) {
            $self->o_counter = $data['o_counter'];
        }

        return $self;
    }
}
