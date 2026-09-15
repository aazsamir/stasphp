<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapedPerformerInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $stored_id;
    public ?string $name;
    public ?string $disambiguation;
    public ?string $gender;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $twitter;
    public ?string $instagram;
    public ?string $birthdate;
    public ?string $ethnicity;
    public ?string $country;
    public ?string $eye_color;
    public ?string $height;
    public ?string $measurements;
    public ?string $fake_tits;
    public ?string $penis_length;
    public ?string $circumcised;
    public ?string $career_length;
    public ?string $career_start;
    public ?string $career_end;
    public ?string $tattoos;
    public ?string $piercings;
    public ?string $aliases;
    public ?string $details;
    public ?string $death_date;
    public ?string $hair_color;
    public ?string $weight;
    public ?string $remote_site_id;

    /**
     * @param array<string> $urls
     */
    public static function new(
        ?string $stored_id = null,
        ?string $name = null,
        ?string $disambiguation = null,
        ?string $gender = null,
        ?string $url = null,
        ?array $urls = null,
        ?string $twitter = null,
        ?string $instagram = null,
        ?string $birthdate = null,
        ?string $ethnicity = null,
        ?string $country = null,
        ?string $eye_color = null,
        ?string $height = null,
        ?string $measurements = null,
        ?string $fake_tits = null,
        ?string $penis_length = null,
        ?string $circumcised = null,
        ?string $career_length = null,
        ?string $career_start = null,
        ?string $career_end = null,
        ?string $tattoos = null,
        ?string $piercings = null,
        ?string $aliases = null,
        ?string $details = null,
        ?string $death_date = null,
        ?string $hair_color = null,
        ?string $weight = null,
        ?string $remote_site_id = null,
    ): self {
        $self = new self();
        $self->stored_id = $stored_id;
        $self->name = $name;
        $self->disambiguation = $disambiguation;
        $self->gender = $gender;
        $self->url = $url;
        $self->urls = $urls;
        $self->twitter = $twitter;
        $self->instagram = $instagram;
        $self->birthdate = $birthdate;
        $self->ethnicity = $ethnicity;
        $self->country = $country;
        $self->eye_color = $eye_color;
        $self->height = $height;
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
        $self->details = $details;
        $self->death_date = $death_date;
        $self->hair_color = $hair_color;
        $self->weight = $weight;
        $self->remote_site_id = $remote_site_id;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['stored_id'])) {
            $self->stored_id = $data['stored_id'];
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['disambiguation'])) {
            $self->disambiguation = $data['disambiguation'];
        }
        if (isset($data['gender'])) {
            $self->gender = $data['gender'];
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
        if (isset($data['twitter'])) {
            $self->twitter = $data['twitter'];
        }
        if (isset($data['instagram'])) {
            $self->instagram = $data['instagram'];
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
        if (isset($data['height'])) {
            $self->height = $data['height'];
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
            $self->circumcised = $data['circumcised'];
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
        if (isset($data['aliases'])) {
            $self->aliases = $data['aliases'];
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
        if (isset($data['remote_site_id'])) {
            $self->remote_site_id = $data['remote_site_id'];
        }

        return $self;
    }
}
