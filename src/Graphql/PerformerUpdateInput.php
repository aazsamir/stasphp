<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class PerformerUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?string $name;
    public ?string $disambiguation;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?GenderEnum $gender;
    public ?string $birthdate;
    public ?string $ethnicity;
    public ?string $country;
    public ?string $eye_color;
    public ?int $height_cm;
    public ?string $measurements;
    public ?string $fake_tits;
    public ?float $penis_length;
    public ?CircumcisedEnum $circumcised;
    public ?string $career_length;
    public ?string $career_start;
    public ?string $career_end;
    public ?string $tattoos;
    public ?string $piercings;

    /** @var array<string> */
    public ?array $alias_list;
    public ?string $twitter;
    public ?string $instagram;
    public ?bool $favorite;

    /** @var array<string> */
    public ?array $tag_ids;
    public ?string $image;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashIDInput> */
    public ?array $stash_ids;
    public ?int $rating100;
    public ?string $details;
    public ?string $death_date;
    public ?string $hair_color;
    public ?int $weight;
    public ?bool $ignore_auto_tag;
    public ?CustomFieldsInput $custom_fields;

    /**
     * @param array<string> $urls
     * @param array<string> $alias_list
     * @param array<string> $tag_ids
     * @param array<\Aazsamir\Stasphp\Graphpql\StashIDInput> $stash_ids
     */
    public static function new(
        string $id,
        ?string $name = null,
        ?string $disambiguation = null,
        ?string $url = null,
        ?array $urls = null,
        ?GenderEnum $gender = null,
        ?string $birthdate = null,
        ?string $ethnicity = null,
        ?string $country = null,
        ?string $eye_color = null,
        ?int $height_cm = null,
        ?string $measurements = null,
        ?string $fake_tits = null,
        ?float $penis_length = null,
        ?CircumcisedEnum $circumcised = null,
        ?string $career_length = null,
        ?string $career_start = null,
        ?string $career_end = null,
        ?string $tattoos = null,
        ?string $piercings = null,
        ?array $alias_list = null,
        ?string $twitter = null,
        ?string $instagram = null,
        ?bool $favorite = null,
        ?array $tag_ids = null,
        ?string $image = null,
        ?array $stash_ids = null,
        ?int $rating100 = null,
        ?string $details = null,
        ?string $death_date = null,
        ?string $hair_color = null,
        ?int $weight = null,
        ?bool $ignore_auto_tag = null,
        ?CustomFieldsInput $custom_fields = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->disambiguation = $disambiguation;
        $self->url = $url;
        $self->urls = $urls;
        $self->gender = $gender;
        $self->birthdate = $birthdate;
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
        $self->alias_list = $alias_list;
        $self->twitter = $twitter;
        $self->instagram = $instagram;
        $self->favorite = $favorite;
        $self->tag_ids = $tag_ids;
        $self->image = $image;
        $self->stash_ids = $stash_ids;
        $self->rating100 = $rating100;
        $self->details = $details;
        $self->death_date = $death_date;
        $self->hair_color = $hair_color;
        $self->weight = $weight;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->custom_fields = $custom_fields;

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
        if (isset($data['disambiguation'])) {
            $self->disambiguation = $data['disambiguation'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['gender'])) {
            $self->gender = \Aazsamir\Stasphp\Graphpql\GenderEnum::from($data['gender']);
        }
        if (isset($data['birthdate'])) {
            $self->birthdate = $data['birthdate'];
        }
        if (isset($data['ethnicity'])) {
            $self->ethnicity = $data['ethnicity'];
        }
        if (isset($data['country'])) {
            $self->country = $data['country'];
        }
        if (isset($data['eye_color'])) {
            $self->eye_color = $data['eye_color'];
        }
        if (isset($data['height_cm'])) {
            $self->height_cm = $data['height_cm'];
        }
        if (isset($data['measurements'])) {
            $self->measurements = $data['measurements'];
        }
        if (isset($data['fake_tits'])) {
            $self->fake_tits = $data['fake_tits'];
        }
        if (isset($data['penis_length'])) {
            $self->penis_length = $data['penis_length'];
        }
        if (isset($data['circumcised'])) {
            $self->circumcised = \Aazsamir\Stasphp\Graphpql\CircumcisedEnum::from($data['circumcised']);
        }
        if (isset($data['career_length'])) {
            $self->career_length = $data['career_length'];
        }
        if (isset($data['career_start'])) {
            $self->career_start = $data['career_start'];
        }
        if (isset($data['career_end'])) {
            $self->career_end = $data['career_end'];
        }
        if (isset($data['tattoos'])) {
            $self->tattoos = $data['tattoos'];
        }
        if (isset($data['piercings'])) {
            $self->piercings = $data['piercings'];
        }
        if (isset($data['alias_list'])) {
            $self->alias_list = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['alias_list'] ?? []);
        }
        if (isset($data['twitter'])) {
            $self->twitter = $data['twitter'];
        }
        if (isset($data['instagram'])) {
            $self->instagram = $data['instagram'];
        }
        if (isset($data['favorite'])) {
            $self->favorite = $data['favorite'];
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }
        if (isset($data['image'])) {
            $self->image = $data['image'];
        }
        if (isset($data['stash_ids'])) {
            $self->stash_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\StashIDInput::fromArray($data);
            }, $data['stash_ids'] ?? []);
        }
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['death_date'])) {
            $self->death_date = $data['death_date'];
        }
        if (isset($data['hair_color'])) {
            $self->hair_color = $data['hair_color'];
        }
        if (isset($data['weight'])) {
            $self->weight = $data['weight'];
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = \Aazsamir\Stasphp\Graphpql\CustomFieldsInput::fromArray($data['custom_fields']);
        }

        return $self;
    }
}
