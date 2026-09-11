<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ScrapedPerformer implements \Aazsamir\Graphpql\Model\GraphObject
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

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> */
    public ?array $tags;
    public ?string $image;

    /** @var array<string> */
    public ?array $images;
    public ?string $details;
    public ?string $death_date;
    public ?string $hair_color;
    public ?string $weight;
    public ?string $remote_site_id;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function stored_id(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::stored_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function name(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function disambiguation(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::disambiguation();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function gender(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::gender();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function url(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function urls(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function twitter(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::twitter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function instagram(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::instagram();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function birthdate(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::birthdate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function ethnicity(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::ethnicity();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function country(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::country();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function eye_color(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::eye_color();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function height(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::height();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function measurements(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::measurements();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function fake_tits(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::fake_tits();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function penis_length(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::penis_length();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function circumcised(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::circumcised();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function career_length(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::career_length();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function career_start(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::career_start();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function career_end(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::career_end();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function tattoos(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::tattoos();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function piercings(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::piercings();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function aliases(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function image(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function images(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::images();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function details(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function death_date(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::death_date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function hair_color(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::hair_color();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function weight(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::weight();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField<mixed>
     */
    public static function remote_site_id(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedPerformerField::remote_site_id();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> $tags
     * @param array<string> $images
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
        ?array $tags = null,
        ?string $image = null,
        ?array $images = null,
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
        $self->tags = $tags;
        $self->image = $image;
        $self->images = $images;
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
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['image'])) {
            $self->image = $data['image'];
        }
        if (isset($data['images'])) {
            $self->images = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['images'] ?? []);
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
