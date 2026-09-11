<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Tag implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $name;
    public ?string $sort_name;
    public ?string $description;

    /** @var array<string> */
    public array $aliases;
    public bool $ignore_auto_tag;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;
    public bool $favorite;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashID> */
    public array $stash_ids;
    public ?string $image_path;
    public int $scene_count;
    public int $scene_marker_count;
    public int $image_count;
    public int $gallery_count;
    public int $performer_count;
    public int $studio_count;
    public int $group_count;
    public int $movie_count;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Tag> */
    public array $parents;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Tag> */
    public array $children;
    public int $parent_count;
    public int $child_count;
    public mixed $custom_fields;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function id(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function name(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function sort_name(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::sort_name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function description(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function aliases(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function ignore_auto_tag(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::ignore_auto_tag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function created_at(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function updated_at(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function favorite(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::favorite();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StashIDSelectionSet>
     */
    public static function stash_ids(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::stash_ids();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function image_path(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::image_path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function scene_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::scene_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function scene_marker_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::scene_marker_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function image_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::image_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function gallery_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::gallery_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function performer_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::performer_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function studio_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::studio_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function group_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::group_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function movie_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::movie_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<\Aazsamir\Stasphp\Graphpql\SelectionSet\TagSelectionSet>
     */
    public static function parents(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::parents();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<\Aazsamir\Stasphp\Graphpql\SelectionSet\TagSelectionSet>
     */
    public static function children(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::children();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function parent_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::parent_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function child_count(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::child_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\TagField<mixed>
     */
    public static function custom_fields(): Fields\TagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\TagField::custom_fields();
    }

    /**
     * @param array<string> $aliases
     * @param array<\Aazsamir\Stasphp\Graphpql\StashID> $stash_ids
     * @param array<\Aazsamir\Stasphp\Graphpql\Tag> $parents
     * @param array<\Aazsamir\Stasphp\Graphpql\Tag> $children
     */
    public static function new(
        string $id,
        string $name,
        array $aliases,
        bool $ignore_auto_tag,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        bool $favorite,
        array $stash_ids,
        int $scene_count,
        int $scene_marker_count,
        int $image_count,
        int $gallery_count,
        int $performer_count,
        int $studio_count,
        int $group_count,
        int $movie_count,
        array $parents,
        array $children,
        int $parent_count,
        int $child_count,
        mixed $custom_fields,
        ?string $sort_name = null,
        ?string $description = null,
        ?string $image_path = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->aliases = $aliases;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->favorite = $favorite;
        $self->stash_ids = $stash_ids;
        $self->scene_count = $scene_count;
        $self->scene_marker_count = $scene_marker_count;
        $self->image_count = $image_count;
        $self->gallery_count = $gallery_count;
        $self->performer_count = $performer_count;
        $self->studio_count = $studio_count;
        $self->group_count = $group_count;
        $self->movie_count = $movie_count;
        $self->parents = $parents;
        $self->children = $children;
        $self->parent_count = $parent_count;
        $self->child_count = $child_count;
        $self->custom_fields = $custom_fields;
        $self->sort_name = $sort_name;
        $self->description = $description;
        $self->image_path = $image_path;

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
        if (isset($data['aliases'])) {
            $self->aliases = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['aliases'] ?? []);
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['created_at'])) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (isset($data['favorite'])) {
            $self->favorite = $data['favorite'];
        }
        if (isset($data['stash_ids'])) {
            $self->stash_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\StashID::fromArray($data);
            }, $data['stash_ids'] ?? []);
        }
        if (isset($data['scene_count'])) {
            $self->scene_count = $data['scene_count'];
        }
        if (isset($data['scene_marker_count'])) {
            $self->scene_marker_count = $data['scene_marker_count'];
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
        if (isset($data['studio_count'])) {
            $self->studio_count = $data['studio_count'];
        }
        if (isset($data['group_count'])) {
            $self->group_count = $data['group_count'];
        }
        if (isset($data['movie_count'])) {
            $self->movie_count = $data['movie_count'];
        }
        if (isset($data['parents'])) {
            $self->parents = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Tag::fromArray($data);
            }, $data['parents'] ?? []);
        }
        if (isset($data['children'])) {
            $self->children = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Tag::fromArray($data);
            }, $data['children'] ?? []);
        }
        if (isset($data['parent_count'])) {
            $self->parent_count = $data['parent_count'];
        }
        if (isset($data['child_count'])) {
            $self->child_count = $data['child_count'];
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = $data['custom_fields'];
        }
        if (isset($data['sort_name'])) {
            $self->sort_name = $data['sort_name'];
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }
        if (isset($data['image_path'])) {
            $self->image_path = $data['image_path'];
        }

        return $self;
    }
}
