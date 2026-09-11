<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Group implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $name;
    public ?string $aliases;
    public ?int $duration;
    public ?string $date;
    public ?int $rating100;
    public ?Studio $studio;
    public ?string $director;
    public ?string $synopsis;

    /** @var array<string> */
    public array $urls;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Tag> */
    public array $tags;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /** @var array<\Aazsamir\Stasphp\Graphpql\GroupDescription> */
    public array $containing_groups;

    /** @var array<\Aazsamir\Stasphp\Graphpql\GroupDescription> */
    public array $sub_groups;
    public ?string $front_image_path;
    public ?string $back_image_path;
    public int $scene_count;
    public int $performer_count;
    public int $sub_group_count;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Scene> */
    public array $scenes;
    public ?int $o_counter;
    public mixed $custom_fields;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function id(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function name(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function aliases(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function duration(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function date(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function rating100(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::rating100();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StudioSelectionSet>
     */
    public static function studio(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function director(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function synopsis(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::synopsis();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function urls(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<\Aazsamir\Stasphp\Graphpql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function created_at(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function updated_at(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GroupDescriptionSelectionSet>
     */
    public static function containing_groups(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::containing_groups();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GroupDescriptionSelectionSet>
     */
    public static function sub_groups(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::sub_groups();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function front_image_path(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::front_image_path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function back_image_path(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::back_image_path();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function scene_count(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::scene_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function performer_count(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::performer_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function sub_group_count(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::sub_group_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneSelectionSet>
     */
    public static function scenes(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::scenes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function o_counter(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::o_counter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupField<mixed>
     */
    public static function custom_fields(): Fields\GroupField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupField::custom_fields();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphpql\Tag> $tags
     * @param array<\Aazsamir\Stasphp\Graphpql\GroupDescription> $containing_groups
     * @param array<\Aazsamir\Stasphp\Graphpql\GroupDescription> $sub_groups
     * @param array<\Aazsamir\Stasphp\Graphpql\Scene> $scenes
     */
    public static function new(
        string $id,
        string $name,
        array $urls,
        array $tags,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        array $containing_groups,
        array $sub_groups,
        int $scene_count,
        int $performer_count,
        int $sub_group_count,
        array $scenes,
        mixed $custom_fields,
        ?string $aliases = null,
        ?int $duration = null,
        ?string $date = null,
        ?int $rating100 = null,
        ?Studio $studio = null,
        ?string $director = null,
        ?string $synopsis = null,
        ?string $front_image_path = null,
        ?string $back_image_path = null,
        ?int $o_counter = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->urls = $urls;
        $self->tags = $tags;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->containing_groups = $containing_groups;
        $self->sub_groups = $sub_groups;
        $self->scene_count = $scene_count;
        $self->performer_count = $performer_count;
        $self->sub_group_count = $sub_group_count;
        $self->scenes = $scenes;
        $self->custom_fields = $custom_fields;
        $self->aliases = $aliases;
        $self->duration = $duration;
        $self->date = $date;
        $self->rating100 = $rating100;
        $self->studio = $studio;
        $self->director = $director;
        $self->synopsis = $synopsis;
        $self->front_image_path = $front_image_path;
        $self->back_image_path = $back_image_path;
        $self->o_counter = $o_counter;

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
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['created_at'])) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (isset($data['containing_groups'])) {
            $self->containing_groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\GroupDescription::fromArray($data);
            }, $data['containing_groups'] ?? []);
        }
        if (isset($data['sub_groups'])) {
            $self->sub_groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\GroupDescription::fromArray($data);
            }, $data['sub_groups'] ?? []);
        }
        if (isset($data['scene_count'])) {
            $self->scene_count = $data['scene_count'];
        }
        if (isset($data['performer_count'])) {
            $self->performer_count = $data['performer_count'];
        }
        if (isset($data['sub_group_count'])) {
            $self->sub_group_count = $data['sub_group_count'];
        }
        if (isset($data['scenes'])) {
            $self->scenes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Scene::fromArray($data);
            }, $data['scenes'] ?? []);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = $data['custom_fields'];
        }
        if (isset($data['aliases'])) {
            $self->aliases = $data['aliases'];
        }
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
        }
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['studio'])) {
            $self->studio = \Aazsamir\Stasphp\Graphpql\Studio::fromArray($data['studio']);
        }
        if (isset($data['director'])) {
            $self->director = $data['director'];
        }
        if (isset($data['synopsis'])) {
            $self->synopsis = $data['synopsis'];
        }
        if (isset($data['front_image_path'])) {
            $self->front_image_path = $data['front_image_path'];
        }
        if (isset($data['back_image_path'])) {
            $self->back_image_path = $data['back_image_path'];
        }
        if (isset($data['o_counter'])) {
            $self->o_counter = $data['o_counter'];
        }

        return $self;
    }
}
