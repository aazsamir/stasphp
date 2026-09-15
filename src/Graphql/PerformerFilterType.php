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
        if (isset($data['AND'])) {
            $self->AND = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['AND']);
        }
        if (isset($data['OR'])) {
            $self->OR = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['OR']);
        }
        if (isset($data['NOT'])) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['NOT']);
        }
        if (isset($data['name'])) {
            $self->name = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['name']);
        }
        if (isset($data['disambiguation'])) {
            $self->disambiguation = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['disambiguation']);
        }
        if (isset($data['details'])) {
            $self->details = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['details']);
        }
        if (isset($data['filter_favorites'])) {
            $self->filter_favorites = $data['filter_favorites'];
        }
        if (isset($data['birth_year'])) {
            $self->birth_year = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['birth_year']);
        }
        if (isset($data['age'])) {
            $self->age = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['age']);
        }
        if (isset($data['ethnicity'])) {
            $self->ethnicity = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['ethnicity']);
        }
        if (isset($data['country'])) {
            $self->country = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['country']);
        }
        if (isset($data['eye_color'])) {
            $self->eye_color = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['eye_color']);
        }
        if (isset($data['height_cm'])) {
            $self->height_cm = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['height_cm']);
        }
        if (isset($data['measurements'])) {
            $self->measurements = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['measurements']);
        }
        if (isset($data['fake_tits'])) {
            $self->fake_tits = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['fake_tits']);
        }
        if (isset($data['penis_length'])) {
            $self->penis_length = \Aazsamir\Stasphp\Graphql\FloatCriterionInput::fromArray($data['penis_length']);
        }
        if (isset($data['circumcised'])) {
            $self->circumcised = \Aazsamir\Stasphp\Graphql\CircumcisionCriterionInput::fromArray($data['circumcised']);
        }
        if (isset($data['career_length'])) {
            $self->career_length = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['career_length']);
        }
        if (isset($data['career_start'])) {
            $self->career_start = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['career_start']);
        }
        if (isset($data['career_end'])) {
            $self->career_end = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['career_end']);
        }
        if (isset($data['tattoos'])) {
            $self->tattoos = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['tattoos']);
        }
        if (isset($data['piercings'])) {
            $self->piercings = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['piercings']);
        }
        if (isset($data['aliases'])) {
            $self->aliases = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['aliases']);
        }
        if (isset($data['gender'])) {
            $self->gender = \Aazsamir\Stasphp\Graphql\GenderCriterionInput::fromArray($data['gender']);
        }
        if (isset($data['is_missing'])) {
            $self->is_missing = $data['is_missing'];
        }
        if (isset($data['tags'])) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (isset($data['tag_count'])) {
            $self->tag_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (isset($data['scene_count'])) {
            $self->scene_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['scene_count']);
        }
        if (isset($data['marker_count'])) {
            $self->marker_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['marker_count']);
        }
        if (isset($data['image_count'])) {
            $self->image_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['image_count']);
        }
        if (isset($data['gallery_count'])) {
            $self->gallery_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['gallery_count']);
        }
        if (isset($data['play_count'])) {
            $self->play_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['play_count']);
        }
        if (isset($data['o_counter'])) {
            $self->o_counter = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['o_counter']);
        }
        if (isset($data['stash_id_endpoint'])) {
            $self->stash_id_endpoint = \Aazsamir\Stasphp\Graphql\StashIDCriterionInput::fromArray($data['stash_id_endpoint']);
        }
        if (isset($data['stash_ids_endpoint'])) {
            $self->stash_ids_endpoint = \Aazsamir\Stasphp\Graphql\StashIDsCriterionInput::fromArray($data['stash_ids_endpoint']);
        }
        if (isset($data['rating100'])) {
            $self->rating100 = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (isset($data['url'])) {
            $self->url = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['url']);
        }
        if (isset($data['hair_color'])) {
            $self->hair_color = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['hair_color']);
        }
        if (isset($data['weight'])) {
            $self->weight = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['weight']);
        }
        if (isset($data['death_year'])) {
            $self->death_year = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['death_year']);
        }
        if (isset($data['studios'])) {
            $self->studios = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (isset($data['groups'])) {
            $self->groups = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['groups']);
        }
        if (isset($data['performers'])) {
            $self->performers = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['birthdate'])) {
            $self->birthdate = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['birthdate']);
        }
        if (isset($data['death_date'])) {
            $self->death_date = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['death_date']);
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
        if (isset($data['tags_filter'])) {
            $self->tags_filter = \Aazsamir\Stasphp\Graphql\TagFilterType::fromArray($data['tags_filter']);
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
