<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ImageFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?ImageFilterType $AND;
    public ?ImageFilterType $OR;
    public ?ImageFilterType $NOT;
    public ?StringCriterionInput $title;
    public ?StringCriterionInput $details;
    public ?IntCriterionInput $id;
    public ?StringCriterionInput $checksum;
    public ?PhashDistanceCriterionInput $phash_distance;
    public ?StringCriterionInput $path;
    public ?IntCriterionInput $file_count;
    public ?IntCriterionInput $rating100;
    public ?DateCriterionInput $date;
    public ?StringCriterionInput $url;
    public ?bool $organized;
    public ?IntCriterionInput $o_counter;
    public ?ResolutionCriterionInput $resolution;
    public ?OrientationCriterionInput $orientation;
    public ?string $is_missing;
    public ?HierarchicalMultiCriterionInput $studios;
    public ?HierarchicalMultiCriterionInput $tags;
    public ?IntCriterionInput $tag_count;
    public ?HierarchicalMultiCriterionInput $performer_tags;
    public ?MultiCriterionInput $performers;
    public ?IntCriterionInput $performer_count;
    public ?bool $performer_favorite;
    public ?IntCriterionInput $performer_age;
    public ?MultiCriterionInput $galleries;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;
    public ?StringCriterionInput $code;
    public ?StringCriterionInput $photographer;
    public ?GalleryFilterType $galleries_filter;
    public ?PerformerFilterType $performers_filter;
    public ?StudioFilterType $studios_filter;
    public ?TagFilterType $tags_filter;
    public ?FileFilterType $files_filter;

    /** @var array<\Aazsamir\Stasphp\Graphpql\CustomFieldCriterionInput> */
    public ?array $custom_fields;

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\CustomFieldCriterionInput> $custom_fields
     */
    public static function new(
        ?ImageFilterType $AND = null,
        ?ImageFilterType $OR = null,
        ?ImageFilterType $NOT = null,
        ?StringCriterionInput $title = null,
        ?StringCriterionInput $details = null,
        ?IntCriterionInput $id = null,
        ?StringCriterionInput $checksum = null,
        ?PhashDistanceCriterionInput $phash_distance = null,
        ?StringCriterionInput $path = null,
        ?IntCriterionInput $file_count = null,
        ?IntCriterionInput $rating100 = null,
        ?DateCriterionInput $date = null,
        ?StringCriterionInput $url = null,
        ?bool $organized = null,
        ?IntCriterionInput $o_counter = null,
        ?ResolutionCriterionInput $resolution = null,
        ?OrientationCriterionInput $orientation = null,
        ?string $is_missing = null,
        ?HierarchicalMultiCriterionInput $studios = null,
        ?HierarchicalMultiCriterionInput $tags = null,
        ?IntCriterionInput $tag_count = null,
        ?HierarchicalMultiCriterionInput $performer_tags = null,
        ?MultiCriterionInput $performers = null,
        ?IntCriterionInput $performer_count = null,
        ?bool $performer_favorite = null,
        ?IntCriterionInput $performer_age = null,
        ?MultiCriterionInput $galleries = null,
        ?TimestampCriterionInput $created_at = null,
        ?TimestampCriterionInput $updated_at = null,
        ?StringCriterionInput $code = null,
        ?StringCriterionInput $photographer = null,
        ?GalleryFilterType $galleries_filter = null,
        ?PerformerFilterType $performers_filter = null,
        ?StudioFilterType $studios_filter = null,
        ?TagFilterType $tags_filter = null,
        ?FileFilterType $files_filter = null,
        ?array $custom_fields = null,
    ): self {
        $self = new self();
        $self->AND = $AND;
        $self->OR = $OR;
        $self->NOT = $NOT;
        $self->title = $title;
        $self->details = $details;
        $self->id = $id;
        $self->checksum = $checksum;
        $self->phash_distance = $phash_distance;
        $self->path = $path;
        $self->file_count = $file_count;
        $self->rating100 = $rating100;
        $self->date = $date;
        $self->url = $url;
        $self->organized = $organized;
        $self->o_counter = $o_counter;
        $self->resolution = $resolution;
        $self->orientation = $orientation;
        $self->is_missing = $is_missing;
        $self->studios = $studios;
        $self->tags = $tags;
        $self->tag_count = $tag_count;
        $self->performer_tags = $performer_tags;
        $self->performers = $performers;
        $self->performer_count = $performer_count;
        $self->performer_favorite = $performer_favorite;
        $self->performer_age = $performer_age;
        $self->galleries = $galleries;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->code = $code;
        $self->photographer = $photographer;
        $self->galleries_filter = $galleries_filter;
        $self->performers_filter = $performers_filter;
        $self->studios_filter = $studios_filter;
        $self->tags_filter = $tags_filter;
        $self->files_filter = $files_filter;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['AND'])) {
            $self->AND = \Aazsamir\Stasphp\Graphpql\ImageFilterType::fromArray($data['AND']);
        }
        if (isset($data['OR'])) {
            $self->OR = \Aazsamir\Stasphp\Graphpql\ImageFilterType::fromArray($data['OR']);
        }
        if (isset($data['NOT'])) {
            $self->NOT = \Aazsamir\Stasphp\Graphpql\ImageFilterType::fromArray($data['NOT']);
        }
        if (isset($data['title'])) {
            $self->title = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['title']);
        }
        if (isset($data['details'])) {
            $self->details = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['details']);
        }
        if (isset($data['id'])) {
            $self->id = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['id']);
        }
        if (isset($data['checksum'])) {
            $self->checksum = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['checksum']);
        }
        if (isset($data['phash_distance'])) {
            $self->phash_distance = \Aazsamir\Stasphp\Graphpql\PhashDistanceCriterionInput::fromArray($data['phash_distance']);
        }
        if (isset($data['path'])) {
            $self->path = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['path']);
        }
        if (isset($data['file_count'])) {
            $self->file_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['file_count']);
        }
        if (isset($data['rating100'])) {
            $self->rating100 = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (isset($data['date'])) {
            $self->date = \Aazsamir\Stasphp\Graphpql\DateCriterionInput::fromArray($data['date']);
        }
        if (isset($data['url'])) {
            $self->url = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['url']);
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }
        if (isset($data['o_counter'])) {
            $self->o_counter = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['o_counter']);
        }
        if (isset($data['resolution'])) {
            $self->resolution = \Aazsamir\Stasphp\Graphpql\ResolutionCriterionInput::fromArray($data['resolution']);
        }
        if (isset($data['orientation'])) {
            $self->orientation = \Aazsamir\Stasphp\Graphpql\OrientationCriterionInput::fromArray($data['orientation']);
        }
        if (isset($data['is_missing'])) {
            $self->is_missing = $data['is_missing'];
        }
        if (isset($data['studios'])) {
            $self->studios = \Aazsamir\Stasphp\Graphpql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (isset($data['tags'])) {
            $self->tags = \Aazsamir\Stasphp\Graphpql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (isset($data['tag_count'])) {
            $self->tag_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (isset($data['performer_tags'])) {
            $self->performer_tags = \Aazsamir\Stasphp\Graphpql\HierarchicalMultiCriterionInput::fromArray($data['performer_tags']);
        }
        if (isset($data['performers'])) {
            $self->performers = \Aazsamir\Stasphp\Graphpql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (isset($data['performer_count'])) {
            $self->performer_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['performer_count']);
        }
        if (isset($data['performer_favorite'])) {
            $self->performer_favorite = $data['performer_favorite'];
        }
        if (isset($data['performer_age'])) {
            $self->performer_age = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['performer_age']);
        }
        if (isset($data['galleries'])) {
            $self->galleries = \Aazsamir\Stasphp\Graphpql\MultiCriterionInput::fromArray($data['galleries']);
        }
        if (isset($data['created_at'])) {
            $self->created_at = \Aazsamir\Stasphp\Graphpql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = \Aazsamir\Stasphp\Graphpql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (isset($data['code'])) {
            $self->code = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['code']);
        }
        if (isset($data['photographer'])) {
            $self->photographer = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['photographer']);
        }
        if (isset($data['galleries_filter'])) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphpql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (isset($data['performers_filter'])) {
            $self->performers_filter = \Aazsamir\Stasphp\Graphpql\PerformerFilterType::fromArray($data['performers_filter']);
        }
        if (isset($data['studios_filter'])) {
            $self->studios_filter = \Aazsamir\Stasphp\Graphpql\StudioFilterType::fromArray($data['studios_filter']);
        }
        if (isset($data['tags_filter'])) {
            $self->tags_filter = \Aazsamir\Stasphp\Graphpql\TagFilterType::fromArray($data['tags_filter']);
        }
        if (isset($data['files_filter'])) {
            $self->files_filter = \Aazsamir\Stasphp\Graphpql\FileFilterType::fromArray($data['files_filter']);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\CustomFieldCriterionInput::fromArray($data);
            }, $data['custom_fields'] ?? []);
        }

        return $self;
    }
}
