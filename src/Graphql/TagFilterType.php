<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class TagFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?TagFilterType $AND;
    public ?TagFilterType $OR;
    public ?TagFilterType $NOT;
    public ?StringCriterionInput $name;
    public ?StringCriterionInput $sort_name;
    public ?StringCriterionInput $aliases;
    public ?bool $favorite;
    public ?StringCriterionInput $description;
    public ?string $is_missing;
    public ?IntCriterionInput $scene_count;
    public ?IntCriterionInput $image_count;
    public ?IntCriterionInput $gallery_count;
    public ?IntCriterionInput $performer_count;
    public ?IntCriterionInput $studio_count;
    public ?IntCriterionInput $movie_count;
    public ?IntCriterionInput $group_count;
    public ?IntCriterionInput $marker_count;
    public ?HierarchicalMultiCriterionInput $parents;
    public ?HierarchicalMultiCriterionInput $children;
    public ?IntCriterionInput $parent_count;
    public ?IntCriterionInput $child_count;
    public ?bool $ignore_auto_tag;
    public ?StashIDCriterionInput $stash_id_endpoint;
    public ?StashIDsCriterionInput $stash_ids_endpoint;
    public ?SceneFilterType $scenes_filter;
    public ?ImageFilterType $images_filter;
    public ?GalleryFilterType $galleries_filter;
    public ?GroupFilterType $groups_filter;
    public ?PerformerFilterType $performers_filter;
    public ?StudioFilterType $studios_filter;
    public ?SceneMarkerFilterType $markers_filter;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;

    /** @var array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> */
    public ?array $custom_fields;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> $custom_fields
     */
    public static function new(
        ?TagFilterType $AND = null,
        ?TagFilterType $OR = null,
        ?TagFilterType $NOT = null,
        ?StringCriterionInput $name = null,
        ?StringCriterionInput $sort_name = null,
        ?StringCriterionInput $aliases = null,
        ?bool $favorite = null,
        ?StringCriterionInput $description = null,
        ?string $is_missing = null,
        ?IntCriterionInput $scene_count = null,
        ?IntCriterionInput $image_count = null,
        ?IntCriterionInput $gallery_count = null,
        ?IntCriterionInput $performer_count = null,
        ?IntCriterionInput $studio_count = null,
        ?IntCriterionInput $movie_count = null,
        ?IntCriterionInput $group_count = null,
        ?IntCriterionInput $marker_count = null,
        ?HierarchicalMultiCriterionInput $parents = null,
        ?HierarchicalMultiCriterionInput $children = null,
        ?IntCriterionInput $parent_count = null,
        ?IntCriterionInput $child_count = null,
        ?bool $ignore_auto_tag = null,
        ?StashIDCriterionInput $stash_id_endpoint = null,
        ?StashIDsCriterionInput $stash_ids_endpoint = null,
        ?SceneFilterType $scenes_filter = null,
        ?ImageFilterType $images_filter = null,
        ?GalleryFilterType $galleries_filter = null,
        ?GroupFilterType $groups_filter = null,
        ?PerformerFilterType $performers_filter = null,
        ?StudioFilterType $studios_filter = null,
        ?SceneMarkerFilterType $markers_filter = null,
        ?TimestampCriterionInput $created_at = null,
        ?TimestampCriterionInput $updated_at = null,
        ?array $custom_fields = null,
    ): self {
        $self = new self();
        $self->AND = $AND;
        $self->OR = $OR;
        $self->NOT = $NOT;
        $self->name = $name;
        $self->sort_name = $sort_name;
        $self->aliases = $aliases;
        $self->favorite = $favorite;
        $self->description = $description;
        $self->is_missing = $is_missing;
        $self->scene_count = $scene_count;
        $self->image_count = $image_count;
        $self->gallery_count = $gallery_count;
        $self->performer_count = $performer_count;
        $self->studio_count = $studio_count;
        $self->movie_count = $movie_count;
        $self->group_count = $group_count;
        $self->marker_count = $marker_count;
        $self->parents = $parents;
        $self->children = $children;
        $self->parent_count = $parent_count;
        $self->child_count = $child_count;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->stash_id_endpoint = $stash_id_endpoint;
        $self->stash_ids_endpoint = $stash_ids_endpoint;
        $self->scenes_filter = $scenes_filter;
        $self->images_filter = $images_filter;
        $self->galleries_filter = $galleries_filter;
        $self->groups_filter = $groups_filter;
        $self->performers_filter = $performers_filter;
        $self->studios_filter = $studios_filter;
        $self->markers_filter = $markers_filter;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['AND'])) {
            $self->AND = \Aazsamir\Stasphp\Graphql\TagFilterType::fromArray($data['AND']);
        }
        if (isset($data['OR'])) {
            $self->OR = \Aazsamir\Stasphp\Graphql\TagFilterType::fromArray($data['OR']);
        }
        if (isset($data['NOT'])) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\TagFilterType::fromArray($data['NOT']);
        }
        if (isset($data['name'])) {
            $self->name = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['name']);
        }
        if (isset($data['sort_name'])) {
            $self->sort_name = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['sort_name']);
        }
        if (isset($data['aliases'])) {
            $self->aliases = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['aliases']);
        }
        if (isset($data['favorite'])) {
            $self->favorite = $data['favorite'];
        }
        if (isset($data['description'])) {
            $self->description = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['description']);
        }
        if (isset($data['is_missing'])) {
            $self->is_missing = $data['is_missing'];
        }
        if (isset($data['scene_count'])) {
            $self->scene_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['scene_count']);
        }
        if (isset($data['image_count'])) {
            $self->image_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['image_count']);
        }
        if (isset($data['gallery_count'])) {
            $self->gallery_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['gallery_count']);
        }
        if (isset($data['performer_count'])) {
            $self->performer_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['performer_count']);
        }
        if (isset($data['studio_count'])) {
            $self->studio_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['studio_count']);
        }
        if (isset($data['movie_count'])) {
            $self->movie_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['movie_count']);
        }
        if (isset($data['group_count'])) {
            $self->group_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['group_count']);
        }
        if (isset($data['marker_count'])) {
            $self->marker_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['marker_count']);
        }
        if (isset($data['parents'])) {
            $self->parents = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['parents']);
        }
        if (isset($data['children'])) {
            $self->children = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['children']);
        }
        if (isset($data['parent_count'])) {
            $self->parent_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['parent_count']);
        }
        if (isset($data['child_count'])) {
            $self->child_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['child_count']);
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['stash_id_endpoint'])) {
            $self->stash_id_endpoint = \Aazsamir\Stasphp\Graphql\StashIDCriterionInput::fromArray($data['stash_id_endpoint']);
        }
        if (isset($data['stash_ids_endpoint'])) {
            $self->stash_ids_endpoint = \Aazsamir\Stasphp\Graphql\StashIDsCriterionInput::fromArray($data['stash_ids_endpoint']);
        }
        if (isset($data['scenes_filter'])) {
            $self->scenes_filter = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['scenes_filter']);
        }
        if (isset($data['images_filter'])) {
            $self->images_filter = \Aazsamir\Stasphp\Graphql\ImageFilterType::fromArray($data['images_filter']);
        }
        if (isset($data['galleries_filter'])) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (isset($data['groups_filter'])) {
            $self->groups_filter = \Aazsamir\Stasphp\Graphql\GroupFilterType::fromArray($data['groups_filter']);
        }
        if (isset($data['performers_filter'])) {
            $self->performers_filter = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['performers_filter']);
        }
        if (isset($data['studios_filter'])) {
            $self->studios_filter = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['studios_filter']);
        }
        if (isset($data['markers_filter'])) {
            $self->markers_filter = \Aazsamir\Stasphp\Graphql\SceneMarkerFilterType::fromArray($data['markers_filter']);
        }
        if (isset($data['created_at'])) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput::fromArray($data);
            }, $data['custom_fields'] ?? []);
        }

        return $self;
    }
}
