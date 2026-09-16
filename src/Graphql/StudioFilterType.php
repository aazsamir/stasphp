<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StudioFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?StudioFilterType $AND;
    public ?StudioFilterType $OR;
    public ?StudioFilterType $NOT;
    public ?StringCriterionInput $name;
    public ?StringCriterionInput $details;
    public ?MultiCriterionInput $parents;
    public ?StashIDCriterionInput $stash_id_endpoint;
    public ?StashIDsCriterionInput $stash_ids_endpoint;
    public ?HierarchicalMultiCriterionInput $tags;
    public ?string $is_missing;
    public ?IntCriterionInput $rating100;
    public ?bool $favorite;
    public ?IntCriterionInput $scene_count;
    public ?IntCriterionInput $image_count;
    public ?IntCriterionInput $gallery_count;
    public ?IntCriterionInput $group_count;
    public ?IntCriterionInput $tag_count;
    public ?StringCriterionInput $url;
    public ?StringCriterionInput $aliases;
    public ?IntCriterionInput $child_count;
    public ?bool $ignore_auto_tag;
    public ?bool $organized;
    public ?SceneFilterType $scenes_filter;
    public ?ImageFilterType $images_filter;
    public ?GalleryFilterType $galleries_filter;
    public ?GroupFilterType $groups_filter;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;

    /** @var array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> */
    public ?array $custom_fields;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> $custom_fields
     */
    public static function new(
        ?StudioFilterType $AND = null,
        ?StudioFilterType $OR = null,
        ?StudioFilterType $NOT = null,
        ?StringCriterionInput $name = null,
        ?StringCriterionInput $details = null,
        ?MultiCriterionInput $parents = null,
        ?StashIDCriterionInput $stash_id_endpoint = null,
        ?StashIDsCriterionInput $stash_ids_endpoint = null,
        ?HierarchicalMultiCriterionInput $tags = null,
        ?string $is_missing = null,
        ?IntCriterionInput $rating100 = null,
        ?bool $favorite = null,
        ?IntCriterionInput $scene_count = null,
        ?IntCriterionInput $image_count = null,
        ?IntCriterionInput $gallery_count = null,
        ?IntCriterionInput $group_count = null,
        ?IntCriterionInput $tag_count = null,
        ?StringCriterionInput $url = null,
        ?StringCriterionInput $aliases = null,
        ?IntCriterionInput $child_count = null,
        ?bool $ignore_auto_tag = null,
        ?bool $organized = null,
        ?SceneFilterType $scenes_filter = null,
        ?ImageFilterType $images_filter = null,
        ?GalleryFilterType $galleries_filter = null,
        ?GroupFilterType $groups_filter = null,
        ?TimestampCriterionInput $created_at = null,
        ?TimestampCriterionInput $updated_at = null,
        ?array $custom_fields = null,
    ): self {
        $self = new self();
        $self->AND = $AND;
        $self->OR = $OR;
        $self->NOT = $NOT;
        $self->name = $name;
        $self->details = $details;
        $self->parents = $parents;
        $self->stash_id_endpoint = $stash_id_endpoint;
        $self->stash_ids_endpoint = $stash_ids_endpoint;
        $self->tags = $tags;
        $self->is_missing = $is_missing;
        $self->rating100 = $rating100;
        $self->favorite = $favorite;
        $self->scene_count = $scene_count;
        $self->image_count = $image_count;
        $self->gallery_count = $gallery_count;
        $self->group_count = $group_count;
        $self->tag_count = $tag_count;
        $self->url = $url;
        $self->aliases = $aliases;
        $self->child_count = $child_count;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->organized = $organized;
        $self->scenes_filter = $scenes_filter;
        $self->images_filter = $images_filter;
        $self->galleries_filter = $galleries_filter;
        $self->groups_filter = $groups_filter;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('AND', $data)) {
            $self->AND = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['AND']);
        }
        if (array_key_exists('OR', $data)) {
            $self->OR = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['OR']);
        }
        if (array_key_exists('NOT', $data)) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['NOT']);
        }
        if (array_key_exists('name', $data)) {
            $self->name = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['name']);
        }
        if (array_key_exists('details', $data)) {
            $self->details = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['details']);
        }
        if (array_key_exists('parents', $data)) {
            $self->parents = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['parents']);
        }
        if (array_key_exists('stash_id_endpoint', $data)) {
            $self->stash_id_endpoint = \Aazsamir\Stasphp\Graphql\StashIDCriterionInput::fromArray($data['stash_id_endpoint']);
        }
        if (array_key_exists('stash_ids_endpoint', $data)) {
            $self->stash_ids_endpoint = \Aazsamir\Stasphp\Graphql\StashIDsCriterionInput::fromArray($data['stash_ids_endpoint']);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (array_key_exists('is_missing', $data)) {
            $self->is_missing = $data['is_missing'];
        }
        if (array_key_exists('rating100', $data)) {
            $self->rating100 = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (array_key_exists('favorite', $data)) {
            $self->favorite = $data['favorite'];
        }
        if (array_key_exists('scene_count', $data)) {
            $self->scene_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['scene_count']);
        }
        if (array_key_exists('image_count', $data)) {
            $self->image_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['image_count']);
        }
        if (array_key_exists('gallery_count', $data)) {
            $self->gallery_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['gallery_count']);
        }
        if (array_key_exists('group_count', $data)) {
            $self->group_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['group_count']);
        }
        if (array_key_exists('tag_count', $data)) {
            $self->tag_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (array_key_exists('url', $data)) {
            $self->url = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['url']);
        }
        if (array_key_exists('aliases', $data)) {
            $self->aliases = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['aliases']);
        }
        if (array_key_exists('child_count', $data)) {
            $self->child_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['child_count']);
        }
        if (array_key_exists('ignore_auto_tag', $data)) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (array_key_exists('organized', $data)) {
            $self->organized = $data['organized'];
        }
        if (array_key_exists('scenes_filter', $data)) {
            $self->scenes_filter = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['scenes_filter']);
        }
        if (array_key_exists('images_filter', $data)) {
            $self->images_filter = \Aazsamir\Stasphp\Graphql\ImageFilterType::fromArray($data['images_filter']);
        }
        if (array_key_exists('galleries_filter', $data)) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (array_key_exists('groups_filter', $data)) {
            $self->groups_filter = \Aazsamir\Stasphp\Graphql\GroupFilterType::fromArray($data['groups_filter']);
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (array_key_exists('custom_fields', $data)) {
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
