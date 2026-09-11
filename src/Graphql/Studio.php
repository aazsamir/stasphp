<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Studio implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $name;
    public ?string $url;

    /** @var array<string> */
    public array $urls;
    public ?Studio $parent_studio;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Studio> */
    public array $child_studios;

    /** @var array<string> */
    public array $aliases;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Tag> */
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

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashID> */
    public array $stash_ids;
    public ?int $rating100;
    public bool $favorite;
    public ?string $details;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Group> */
    public array $groups;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Movie> */
    public array $movies;
    public ?int $o_counter;
    public mixed $custom_fields;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function id(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function name(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function url(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function urls(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StudioSelectionSet>
     */
    public static function parent_studio(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::parent_studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StudioSelectionSet>
     */
    public static function child_studios(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::child_studios();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function aliases(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<\Aazsamir\Stasphp\Graphpql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function ignore_auto_tag(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::ignore_auto_tag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function organized(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::organized();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function image_path(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::image_path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function scene_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::scene_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function image_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::image_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function gallery_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::gallery_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function performer_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::performer_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function group_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::group_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function movie_count(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::movie_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StashIDSelectionSet>
     */
    public static function stash_ids(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::stash_ids();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function rating100(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::rating100();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function favorite(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::favorite();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function details(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function created_at(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function updated_at(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GroupSelectionSet>
     */
    public static function groups(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::groups();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<\Aazsamir\Stasphp\Graphpql\SelectionSet\MovieSelectionSet>
     */
    public static function movies(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::movies();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function o_counter(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::o_counter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StudioField<mixed>
     */
    public static function custom_fields(): Fields\StudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StudioField::custom_fields();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphpql\Studio> $child_studios
     * @param array<string> $aliases
     * @param array<\Aazsamir\Stasphp\Graphpql\Tag> $tags
     * @param array<\Aazsamir\Stasphp\Graphpql\StashID> $stash_ids
     * @param array<\Aazsamir\Stasphp\Graphpql\Group> $groups
     * @param array<\Aazsamir\Stasphp\Graphpql\Movie> $movies
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
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['child_studios'])) {
            $self->child_studios = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Studio::fromArray($data);
            }, $data['child_studios'] ?? []);
        }
        if (isset($data['aliases'])) {
            $self->aliases = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['aliases'] ?? []);
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }
        if (isset($data['scene_count'])) {
            $self->scene_count = $data['scene_count'];
        }
        if (isset($data['image_count'])) {
            $self->image_count = $data['image_count'];
        }
        if (isset($data['gallery_count'])) {
            $self->gallery_count = $data['gallery_count'];
        }
        if (isset($data['performer_count'])) {
            $self->performer_count = $data['performer_count'];
        }
        if (isset($data['group_count'])) {
            $self->group_count = $data['group_count'];
        }
        if (isset($data['movie_count'])) {
            $self->movie_count = $data['movie_count'];
        }
        if (isset($data['stash_ids'])) {
            $self->stash_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\StashID::fromArray($data);
            }, $data['stash_ids'] ?? []);
        }
        if (isset($data['favorite'])) {
            $self->favorite = $data['favorite'];
        }
        if (isset($data['created_at'])) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (isset($data['groups'])) {
            $self->groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Group::fromArray($data);
            }, $data['groups'] ?? []);
        }
        if (isset($data['movies'])) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Movie::fromArray($data);
            }, $data['movies'] ?? []);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = $data['custom_fields'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['parent_studio'])) {
            $self->parent_studio = \Aazsamir\Stasphp\Graphpql\Studio::fromArray($data['parent_studio']);
        }
        if (isset($data['image_path'])) {
            $self->image_path = $data['image_path'];
        }
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['o_counter'])) {
            $self->o_counter = $data['o_counter'];
        }

        return $self;
    }
}
