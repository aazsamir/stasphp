<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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

    /** @var array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> */
    public ?array $custom_fields;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> $custom_fields
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
        if (array_key_exists('AND', $data)) {
            $self->AND = \Aazsamir\Stasphp\Graphql\ImageFilterType::fromArray($data['AND']);
        }
        if (array_key_exists('OR', $data)) {
            $self->OR = \Aazsamir\Stasphp\Graphql\ImageFilterType::fromArray($data['OR']);
        }
        if (array_key_exists('NOT', $data)) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\ImageFilterType::fromArray($data['NOT']);
        }
        if (array_key_exists('title', $data)) {
            $self->title = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['title']);
        }
        if (array_key_exists('details', $data)) {
            $self->details = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['details']);
        }
        if (array_key_exists('id', $data)) {
            $self->id = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['id']);
        }
        if (array_key_exists('checksum', $data)) {
            $self->checksum = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['checksum']);
        }
        if (array_key_exists('phash_distance', $data)) {
            $self->phash_distance = \Aazsamir\Stasphp\Graphql\PhashDistanceCriterionInput::fromArray($data['phash_distance']);
        }
        if (array_key_exists('path', $data)) {
            $self->path = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['path']);
        }
        if (array_key_exists('file_count', $data)) {
            $self->file_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['file_count']);
        }
        if (array_key_exists('rating100', $data)) {
            $self->rating100 = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (array_key_exists('date', $data)) {
            $self->date = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['date']);
        }
        if (array_key_exists('url', $data)) {
            $self->url = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['url']);
        }
        if (array_key_exists('organized', $data)) {
            $self->organized = $data['organized'];
        }
        if (array_key_exists('o_counter', $data)) {
            $self->o_counter = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['o_counter']);
        }
        if (array_key_exists('resolution', $data)) {
            $self->resolution = \Aazsamir\Stasphp\Graphql\ResolutionCriterionInput::fromArray($data['resolution']);
        }
        if (array_key_exists('orientation', $data)) {
            $self->orientation = \Aazsamir\Stasphp\Graphql\OrientationCriterionInput::fromArray($data['orientation']);
        }
        if (array_key_exists('is_missing', $data)) {
            $self->is_missing = $data['is_missing'];
        }
        if (array_key_exists('studios', $data)) {
            $self->studios = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (array_key_exists('tag_count', $data)) {
            $self->tag_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (array_key_exists('performer_tags', $data)) {
            $self->performer_tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['performer_tags']);
        }
        if (array_key_exists('performers', $data)) {
            $self->performers = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (array_key_exists('performer_count', $data)) {
            $self->performer_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['performer_count']);
        }
        if (array_key_exists('performer_favorite', $data)) {
            $self->performer_favorite = $data['performer_favorite'];
        }
        if (array_key_exists('performer_age', $data)) {
            $self->performer_age = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['performer_age']);
        }
        if (array_key_exists('galleries', $data)) {
            $self->galleries = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['galleries']);
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (array_key_exists('code', $data)) {
            $self->code = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['code']);
        }
        if (array_key_exists('photographer', $data)) {
            $self->photographer = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['photographer']);
        }
        if (array_key_exists('galleries_filter', $data)) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (array_key_exists('performers_filter', $data)) {
            $self->performers_filter = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['performers_filter']);
        }
        if (array_key_exists('studios_filter', $data)) {
            $self->studios_filter = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['studios_filter']);
        }
        if (array_key_exists('tags_filter', $data)) {
            $self->tags_filter = \Aazsamir\Stasphp\Graphql\TagFilterType::fromArray($data['tags_filter']);
        }
        if (array_key_exists('files_filter', $data)) {
            $self->files_filter = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['files_filter']);
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
