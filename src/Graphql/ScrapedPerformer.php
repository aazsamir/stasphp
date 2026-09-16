<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedTag> */
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
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function stored_id(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::stored_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function name(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function disambiguation(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::disambiguation();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function gender(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::gender();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function url(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function urls(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function twitter(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::twitter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function instagram(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::instagram();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function birthdate(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::birthdate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function ethnicity(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::ethnicity();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function country(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::country();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function eye_color(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::eye_color();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function height(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::height();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function measurements(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::measurements();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function fake_tits(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::fake_tits();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function penis_length(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::penis_length();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function circumcised(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::circumcised();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function career_length(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::career_length();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function career_start(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::career_start();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function career_end(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::career_end();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function tattoos(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::tattoos();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function piercings(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::piercings();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function aliases(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function image(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function images(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::images();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function details(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function death_date(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::death_date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function hair_color(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::hair_color();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function weight(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::weight();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField<mixed>
     */
    public static function remote_site_id(): Fields\ScrapedPerformerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedPerformerField::remote_site_id();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedTag> $tags
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
        if (array_key_exists('stored_id', $data)) {
            $self->stored_id = $data['stored_id'];
        }
        if (array_key_exists('name', $data)) {
            $self->name = $data['name'];
        }
        if (array_key_exists('disambiguation', $data)) {
            $self->disambiguation = $data['disambiguation'];
        }
        if (array_key_exists('gender', $data)) {
            $self->gender = $data['gender'];
        }
        if (array_key_exists('url', $data)) {
            $self->url = $data['url'];
        }
        if (array_key_exists('urls', $data)) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (array_key_exists('twitter', $data)) {
            $self->twitter = $data['twitter'];
        }
        if (array_key_exists('instagram', $data)) {
            $self->instagram = $data['instagram'];
        }
        if (array_key_exists('birthdate', $data)) {
            $self->birthdate = $data['birthdate'];
        }
        if (array_key_exists('ethnicity', $data)) {
            $self->ethnicity = $data['ethnicity'];
        }
        if (array_key_exists('country', $data)) {
            $self->country = $data['country'];
        }
        if (array_key_exists('eye_color', $data)) {
            $self->eye_color = $data['eye_color'];
        }
        if (array_key_exists('height', $data)) {
            $self->height = $data['height'];
        }
        if (array_key_exists('measurements', $data)) {
            $self->measurements = $data['measurements'];
        }
        if (array_key_exists('fake_tits', $data)) {
            $self->fake_tits = $data['fake_tits'];
        }
        if (array_key_exists('penis_length', $data)) {
            $self->penis_length = $data['penis_length'];
        }
        if (array_key_exists('circumcised', $data)) {
            $self->circumcised = $data['circumcised'];
        }
        if (array_key_exists('career_length', $data)) {
            $self->career_length = $data['career_length'];
        }
        if (array_key_exists('career_start', $data)) {
            $self->career_start = $data['career_start'];
        }
        if (array_key_exists('career_end', $data)) {
            $self->career_end = $data['career_end'];
        }
        if (array_key_exists('tattoos', $data)) {
            $self->tattoos = $data['tattoos'];
        }
        if (array_key_exists('piercings', $data)) {
            $self->piercings = $data['piercings'];
        }
        if (array_key_exists('aliases', $data)) {
            $self->aliases = $data['aliases'];
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (array_key_exists('image', $data)) {
            $self->image = $data['image'];
        }
        if (array_key_exists('images', $data)) {
            $self->images = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['images'] ?? []);
        }
        if (array_key_exists('details', $data)) {
            $self->details = $data['details'];
        }
        if (array_key_exists('death_date', $data)) {
            $self->death_date = $data['death_date'];
        }
        if (array_key_exists('hair_color', $data)) {
            $self->hair_color = $data['hair_color'];
        }
        if (array_key_exists('weight', $data)) {
            $self->weight = $data['weight'];
        }
        if (array_key_exists('remote_site_id', $data)) {
            $self->remote_site_id = $data['remote_site_id'];
        }

        return $self;
    }
}
