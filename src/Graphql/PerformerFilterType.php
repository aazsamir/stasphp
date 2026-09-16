<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class PerformerFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?PerformerFilterType $AND;
    public ?PerformerFilterType $OR;
    public ?PerformerFilterType $NOT;
    public ?StringCriterionInput $name;
    public ?StringCriterionInput $disambiguation;
    public ?StringCriterionInput $details;
    public ?bool $filter_favorites;
    public ?IntCriterionInput $birth_year;
    public ?IntCriterionInput $age;
    public ?StringCriterionInput $ethnicity;
    public ?StringCriterionInput $country;
    public ?StringCriterionInput $eye_color;
    public ?IntCriterionInput $height_cm;
    public ?StringCriterionInput $measurements;
    public ?StringCriterionInput $fake_tits;
    public ?FloatCriterionInput $penis_length;
    public ?CircumcisionCriterionInput $circumcised;
    public ?StringCriterionInput $career_length;
    public ?DateCriterionInput $career_start;
    public ?DateCriterionInput $career_end;
    public ?StringCriterionInput $tattoos;
    public ?StringCriterionInput $piercings;
    public ?StringCriterionInput $aliases;
    public ?GenderCriterionInput $gender;
    public ?string $is_missing;
    public ?HierarchicalMultiCriterionInput $tags;
    public ?IntCriterionInput $tag_count;
    public ?IntCriterionInput $scene_count;
    public ?IntCriterionInput $marker_count;
    public ?IntCriterionInput $image_count;
    public ?IntCriterionInput $gallery_count;
    public ?IntCriterionInput $play_count;
    public ?IntCriterionInput $o_counter;
    public ?StashIDCriterionInput $stash_id_endpoint;
    public ?StashIDsCriterionInput $stash_ids_endpoint;
    public ?IntCriterionInput $rating100;
    public ?StringCriterionInput $url;
    public ?StringCriterionInput $hair_color;
    public ?IntCriterionInput $weight;
    public ?IntCriterionInput $death_year;
    public ?HierarchicalMultiCriterionInput $studios;
    public ?HierarchicalMultiCriterionInput $groups;
    public ?MultiCriterionInput $performers;
    public ?bool $ignore_auto_tag;
    public ?DateCriterionInput $birthdate;
    public ?DateCriterionInput $death_date;
    public ?SceneFilterType $scenes_filter;
    public ?ImageFilterType $images_filter;
    public ?GalleryFilterType $galleries_filter;
    public ?TagFilterType $tags_filter;
    public ?SceneMarkerFilterType $markers_filter;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;

    /** @var array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> */
    public ?array $custom_fields;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> $custom_fields
     */
    public static function new(
        ?PerformerFilterType $AND = null,
        ?PerformerFilterType $OR = null,
        ?PerformerFilterType $NOT = null,
        ?StringCriterionInput $name = null,
        ?StringCriterionInput $disambiguation = null,
        ?StringCriterionInput $details = null,
        ?bool $filter_favorites = null,
        ?IntCriterionInput $birth_year = null,
        ?IntCriterionInput $age = null,
        ?StringCriterionInput $ethnicity = null,
        ?StringCriterionInput $country = null,
        ?StringCriterionInput $eye_color = null,
        ?IntCriterionInput $height_cm = null,
        ?StringCriterionInput $measurements = null,
        ?StringCriterionInput $fake_tits = null,
        ?FloatCriterionInput $penis_length = null,
        ?CircumcisionCriterionInput $circumcised = null,
        ?StringCriterionInput $career_length = null,
        ?DateCriterionInput $career_start = null,
        ?DateCriterionInput $career_end = null,
        ?StringCriterionInput $tattoos = null,
        ?StringCriterionInput $piercings = null,
        ?StringCriterionInput $aliases = null,
        ?GenderCriterionInput $gender = null,
        ?string $is_missing = null,
        ?HierarchicalMultiCriterionInput $tags = null,
        ?IntCriterionInput $tag_count = null,
        ?IntCriterionInput $scene_count = null,
        ?IntCriterionInput $marker_count = null,
        ?IntCriterionInput $image_count = null,
        ?IntCriterionInput $gallery_count = null,
        ?IntCriterionInput $play_count = null,
        ?IntCriterionInput $o_counter = null,
        ?StashIDCriterionInput $stash_id_endpoint = null,
        ?StashIDsCriterionInput $stash_ids_endpoint = null,
        ?IntCriterionInput $rating100 = null,
        ?StringCriterionInput $url = null,
        ?StringCriterionInput $hair_color = null,
        ?IntCriterionInput $weight = null,
        ?IntCriterionInput $death_year = null,
        ?HierarchicalMultiCriterionInput $studios = null,
        ?HierarchicalMultiCriterionInput $groups = null,
        ?MultiCriterionInput $performers = null,
        ?bool $ignore_auto_tag = null,
        ?DateCriterionInput $birthdate = null,
        ?DateCriterionInput $death_date = null,
        ?SceneFilterType $scenes_filter = null,
        ?ImageFilterType $images_filter = null,
        ?GalleryFilterType $galleries_filter = null,
        ?TagFilterType $tags_filter = null,
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
        $self->disambiguation = $disambiguation;
        $self->details = $details;
        $self->filter_favorites = $filter_favorites;
        $self->birth_year = $birth_year;
        $self->age = $age;
        $self->ethnicity = $ethnicity;
        $self->country = $country;
        $self->eye_color = $eye_color;
        $self->height_cm = $height_cm;
        $self->measurements = $measurements;
        $self->fake_tits = $fake_tits;
        $self->penis_length = $penis_length;
        $self->circumcised = $circumcised;
        $self->career_length = $career_length;
        $self->career_start = $career_start;
        $self->career_end = $career_end;
        $self->tattoos = $tattoos;
        $self->piercings = $piercings;
        $self->aliases = $aliases;
        $self->gender = $gender;
        $self->is_missing = $is_missing;
        $self->tags = $tags;
        $self->tag_count = $tag_count;
        $self->scene_count = $scene_count;
        $self->marker_count = $marker_count;
        $self->image_count = $image_count;
        $self->gallery_count = $gallery_count;
        $self->play_count = $play_count;
        $self->o_counter = $o_counter;
        $self->stash_id_endpoint = $stash_id_endpoint;
        $self->stash_ids_endpoint = $stash_ids_endpoint;
        $self->rating100 = $rating100;
        $self->url = $url;
        $self->hair_color = $hair_color;
        $self->weight = $weight;
        $self->death_year = $death_year;
        $self->studios = $studios;
        $self->groups = $groups;
        $self->performers = $performers;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->birthdate = $birthdate;
        $self->death_date = $death_date;
        $self->scenes_filter = $scenes_filter;
        $self->images_filter = $images_filter;
        $self->galleries_filter = $galleries_filter;
        $self->tags_filter = $tags_filter;
        $self->markers_filter = $markers_filter;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('AND', $data)) {
            $self->AND = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['AND']);
        }
        if (array_key_exists('OR', $data)) {
            $self->OR = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['OR']);
        }
        if (array_key_exists('NOT', $data)) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['NOT']);
        }
        if (array_key_exists('name', $data)) {
            $self->name = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['name']);
        }
        if (array_key_exists('disambiguation', $data)) {
            $self->disambiguation = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['disambiguation']);
        }
        if (array_key_exists('details', $data)) {
            $self->details = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['details']);
        }
        if (array_key_exists('filter_favorites', $data)) {
            $self->filter_favorites = $data['filter_favorites'];
        }
        if (array_key_exists('birth_year', $data)) {
            $self->birth_year = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['birth_year']);
        }
        if (array_key_exists('age', $data)) {
            $self->age = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['age']);
        }
        if (array_key_exists('ethnicity', $data)) {
            $self->ethnicity = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['ethnicity']);
        }
        if (array_key_exists('country', $data)) {
            $self->country = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['country']);
        }
        if (array_key_exists('eye_color', $data)) {
            $self->eye_color = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['eye_color']);
        }
        if (array_key_exists('height_cm', $data)) {
            $self->height_cm = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['height_cm']);
        }
        if (array_key_exists('measurements', $data)) {
            $self->measurements = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['measurements']);
        }
        if (array_key_exists('fake_tits', $data)) {
            $self->fake_tits = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['fake_tits']);
        }
        if (array_key_exists('penis_length', $data)) {
            $self->penis_length = \Aazsamir\Stasphp\Graphql\FloatCriterionInput::fromArray($data['penis_length']);
        }
        if (array_key_exists('circumcised', $data)) {
            $self->circumcised = \Aazsamir\Stasphp\Graphql\CircumcisionCriterionInput::fromArray($data['circumcised']);
        }
        if (array_key_exists('career_length', $data)) {
            $self->career_length = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['career_length']);
        }
        if (array_key_exists('career_start', $data)) {
            $self->career_start = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['career_start']);
        }
        if (array_key_exists('career_end', $data)) {
            $self->career_end = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['career_end']);
        }
        if (array_key_exists('tattoos', $data)) {
            $self->tattoos = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['tattoos']);
        }
        if (array_key_exists('piercings', $data)) {
            $self->piercings = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['piercings']);
        }
        if (array_key_exists('aliases', $data)) {
            $self->aliases = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['aliases']);
        }
        if (array_key_exists('gender', $data)) {
            $self->gender = \Aazsamir\Stasphp\Graphql\GenderCriterionInput::fromArray($data['gender']);
        }
        if (array_key_exists('is_missing', $data)) {
            $self->is_missing = $data['is_missing'];
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (array_key_exists('tag_count', $data)) {
            $self->tag_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (array_key_exists('scene_count', $data)) {
            $self->scene_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['scene_count']);
        }
        if (array_key_exists('marker_count', $data)) {
            $self->marker_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['marker_count']);
        }
        if (array_key_exists('image_count', $data)) {
            $self->image_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['image_count']);
        }
        if (array_key_exists('gallery_count', $data)) {
            $self->gallery_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['gallery_count']);
        }
        if (array_key_exists('play_count', $data)) {
            $self->play_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['play_count']);
        }
        if (array_key_exists('o_counter', $data)) {
            $self->o_counter = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['o_counter']);
        }
        if (array_key_exists('stash_id_endpoint', $data)) {
            $self->stash_id_endpoint = \Aazsamir\Stasphp\Graphql\StashIDCriterionInput::fromArray($data['stash_id_endpoint']);
        }
        if (array_key_exists('stash_ids_endpoint', $data)) {
            $self->stash_ids_endpoint = \Aazsamir\Stasphp\Graphql\StashIDsCriterionInput::fromArray($data['stash_ids_endpoint']);
        }
        if (array_key_exists('rating100', $data)) {
            $self->rating100 = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (array_key_exists('url', $data)) {
            $self->url = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['url']);
        }
        if (array_key_exists('hair_color', $data)) {
            $self->hair_color = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['hair_color']);
        }
        if (array_key_exists('weight', $data)) {
            $self->weight = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['weight']);
        }
        if (array_key_exists('death_year', $data)) {
            $self->death_year = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['death_year']);
        }
        if (array_key_exists('studios', $data)) {
            $self->studios = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (array_key_exists('groups', $data)) {
            $self->groups = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['groups']);
        }
        if (array_key_exists('performers', $data)) {
            $self->performers = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (array_key_exists('ignore_auto_tag', $data)) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (array_key_exists('birthdate', $data)) {
            $self->birthdate = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['birthdate']);
        }
        if (array_key_exists('death_date', $data)) {
            $self->death_date = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['death_date']);
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
        if (array_key_exists('tags_filter', $data)) {
            $self->tags_filter = \Aazsamir\Stasphp\Graphql\TagFilterType::fromArray($data['tags_filter']);
        }
        if (array_key_exists('markers_filter', $data)) {
            $self->markers_filter = \Aazsamir\Stasphp\Graphql\SceneMarkerFilterType::fromArray($data['markers_filter']);
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
