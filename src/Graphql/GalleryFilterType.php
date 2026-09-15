<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GalleryFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?GalleryFilterType $AND;
    public ?GalleryFilterType $OR;
    public ?GalleryFilterType $NOT;
    public ?IntCriterionInput $id;
    public ?StringCriterionInput $title;
    public ?StringCriterionInput $details;
    public ?StringCriterionInput $checksum;
    public ?StringCriterionInput $path;
    public ?IntCriterionInput $file_count;
    public ?string $is_missing;
    public ?bool $is_zip;
    public ?IntCriterionInput $rating100;
    public ?bool $organized;
    public ?ResolutionCriterionInput $average_resolution;
    public ?string $has_chapters;
    public ?MultiCriterionInput $scenes;
    public ?HierarchicalMultiCriterionInput $studios;
    public ?HierarchicalMultiCriterionInput $tags;
    public ?IntCriterionInput $tag_count;
    public ?HierarchicalMultiCriterionInput $performer_tags;
    public ?MultiCriterionInput $performers;
    public ?IntCriterionInput $performer_count;
    public ?bool $performer_favorite;
    public ?IntCriterionInput $performer_age;
    public ?IntCriterionInput $image_count;
    public ?StringCriterionInput $url;
    public ?DateCriterionInput $date;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;
    public ?StringCriterionInput $code;
    public ?StringCriterionInput $photographer;
    public ?SceneFilterType $scenes_filter;
    public ?ImageFilterType $images_filter;
    public ?PerformerFilterType $performers_filter;
    public ?StudioFilterType $studios_filter;
    public ?TagFilterType $tags_filter;
    public ?FileFilterType $files_filter;
    public ?FolderFilterType $folders_filter;
    public ?HierarchicalMultiCriterionInput $parent_folder;

    /** @var array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> */
    public ?array $custom_fields;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> $custom_fields
     */
    public static function new(
        ?GalleryFilterType $AND = null,
        ?GalleryFilterType $OR = null,
        ?GalleryFilterType $NOT = null,
        ?IntCriterionInput $id = null,
        ?StringCriterionInput $title = null,
        ?StringCriterionInput $details = null,
        ?StringCriterionInput $checksum = null,
        ?StringCriterionInput $path = null,
        ?IntCriterionInput $file_count = null,
        ?string $is_missing = null,
        ?bool $is_zip = null,
        ?IntCriterionInput $rating100 = null,
        ?bool $organized = null,
        ?ResolutionCriterionInput $average_resolution = null,
        ?string $has_chapters = null,
        ?MultiCriterionInput $scenes = null,
        ?HierarchicalMultiCriterionInput $studios = null,
        ?HierarchicalMultiCriterionInput $tags = null,
        ?IntCriterionInput $tag_count = null,
        ?HierarchicalMultiCriterionInput $performer_tags = null,
        ?MultiCriterionInput $performers = null,
        ?IntCriterionInput $performer_count = null,
        ?bool $performer_favorite = null,
        ?IntCriterionInput $performer_age = null,
        ?IntCriterionInput $image_count = null,
        ?StringCriterionInput $url = null,
        ?DateCriterionInput $date = null,
        ?TimestampCriterionInput $created_at = null,
        ?TimestampCriterionInput $updated_at = null,
        ?StringCriterionInput $code = null,
        ?StringCriterionInput $photographer = null,
        ?SceneFilterType $scenes_filter = null,
        ?ImageFilterType $images_filter = null,
        ?PerformerFilterType $performers_filter = null,
        ?StudioFilterType $studios_filter = null,
        ?TagFilterType $tags_filter = null,
        ?FileFilterType $files_filter = null,
        ?FolderFilterType $folders_filter = null,
        ?HierarchicalMultiCriterionInput $parent_folder = null,
        ?array $custom_fields = null,
    ): self {
        $self = new self();
        $self->AND = $AND;
        $self->OR = $OR;
        $self->NOT = $NOT;
        $self->id = $id;
        $self->title = $title;
        $self->details = $details;
        $self->checksum = $checksum;
        $self->path = $path;
        $self->file_count = $file_count;
        $self->is_missing = $is_missing;
        $self->is_zip = $is_zip;
        $self->rating100 = $rating100;
        $self->organized = $organized;
        $self->average_resolution = $average_resolution;
        $self->has_chapters = $has_chapters;
        $self->scenes = $scenes;
        $self->studios = $studios;
        $self->tags = $tags;
        $self->tag_count = $tag_count;
        $self->performer_tags = $performer_tags;
        $self->performers = $performers;
        $self->performer_count = $performer_count;
        $self->performer_favorite = $performer_favorite;
        $self->performer_age = $performer_age;
        $self->image_count = $image_count;
        $self->url = $url;
        $self->date = $date;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->code = $code;
        $self->photographer = $photographer;
        $self->scenes_filter = $scenes_filter;
        $self->images_filter = $images_filter;
        $self->performers_filter = $performers_filter;
        $self->studios_filter = $studios_filter;
        $self->tags_filter = $tags_filter;
        $self->files_filter = $files_filter;
        $self->folders_filter = $folders_filter;
        $self->parent_folder = $parent_folder;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['AND'])) {
            $self->AND = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['AND']);
        }
        if (isset($data['OR'])) {
            $self->OR = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['OR']);
        }
        if (isset($data['NOT'])) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['NOT']);
        }
        if (isset($data['id'])) {
            $self->id = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['id']);
        }
        if (isset($data['title'])) {
            $self->title = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['title']);
        }
        if (isset($data['details'])) {
            $self->details = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['details']);
        }
        if (isset($data['checksum'])) {
            $self->checksum = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['checksum']);
        }
        if (isset($data['path'])) {
            $self->path = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['path']);
        }
        if (isset($data['file_count'])) {
            $self->file_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['file_count']);
        }
        if (isset($data['is_missing'])) {
            $self->is_missing = $data['is_missing'];
        }
        if (isset($data['is_zip'])) {
            $self->is_zip = $data['is_zip'];
        }
        if (isset($data['rating100'])) {
            $self->rating100 = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }
        if (isset($data['average_resolution'])) {
            $self->average_resolution = \Aazsamir\Stasphp\Graphql\ResolutionCriterionInput::fromArray($data['average_resolution']);
        }
        if (isset($data['has_chapters'])) {
            $self->has_chapters = $data['has_chapters'];
        }
        if (isset($data['scenes'])) {
            $self->scenes = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['scenes']);
        }
        if (isset($data['studios'])) {
            $self->studios = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (isset($data['tags'])) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (isset($data['tag_count'])) {
            $self->tag_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (isset($data['performer_tags'])) {
            $self->performer_tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['performer_tags']);
        }
        if (isset($data['performers'])) {
            $self->performers = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (isset($data['performer_count'])) {
            $self->performer_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['performer_count']);
        }
        if (isset($data['performer_favorite'])) {
            $self->performer_favorite = $data['performer_favorite'];
        }
        if (isset($data['performer_age'])) {
            $self->performer_age = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['performer_age']);
        }
        if (isset($data['image_count'])) {
            $self->image_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['image_count']);
        }
        if (isset($data['url'])) {
            $self->url = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['url']);
        }
        if (isset($data['date'])) {
            $self->date = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['date']);
        }
        if (isset($data['created_at'])) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (isset($data['code'])) {
            $self->code = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['code']);
        }
        if (isset($data['photographer'])) {
            $self->photographer = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['photographer']);
        }
        if (isset($data['scenes_filter'])) {
            $self->scenes_filter = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['scenes_filter']);
        }
        if (isset($data['images_filter'])) {
            $self->images_filter = \Aazsamir\Stasphp\Graphql\ImageFilterType::fromArray($data['images_filter']);
        }
        if (isset($data['performers_filter'])) {
            $self->performers_filter = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['performers_filter']);
        }
        if (isset($data['studios_filter'])) {
            $self->studios_filter = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['studios_filter']);
        }
        if (isset($data['tags_filter'])) {
            $self->tags_filter = \Aazsamir\Stasphp\Graphql\TagFilterType::fromArray($data['tags_filter']);
        }
        if (isset($data['files_filter'])) {
            $self->files_filter = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['files_filter']);
        }
        if (isset($data['folders_filter'])) {
            $self->folders_filter = \Aazsamir\Stasphp\Graphql\FolderFilterType::fromArray($data['folders_filter']);
        }
        if (isset($data['parent_folder'])) {
            $self->parent_folder = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['parent_folder']);
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
