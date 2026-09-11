<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class GroupUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?string $name;
    public ?string $aliases;
    public ?int $duration;
    public ?string $date;
    public ?int $rating100;
    public ?string $studio_id;
    public ?string $director;
    public ?string $synopsis;

    /** @var array<string> */
    public ?array $urls;

    /** @var array<string> */
    public ?array $tag_ids;

    /** @var array<\Aazsamir\Stasphp\Graphpql\GroupDescriptionInput> */
    public ?array $containing_groups;

    /** @var array<\Aazsamir\Stasphp\Graphpql\GroupDescriptionInput> */
    public ?array $sub_groups;
    public ?string $front_image;
    public ?string $back_image;
    public ?CustomFieldsInput $custom_fields;

    /**
     * @param array<string> $urls
     * @param array<string> $tag_ids
     * @param array<\Aazsamir\Stasphp\Graphpql\GroupDescriptionInput> $containing_groups
     * @param array<\Aazsamir\Stasphp\Graphpql\GroupDescriptionInput> $sub_groups
     */
    public static function new(
        string $id,
        ?string $name = null,
        ?string $aliases = null,
        ?int $duration = null,
        ?string $date = null,
        ?int $rating100 = null,
        ?string $studio_id = null,
        ?string $director = null,
        ?string $synopsis = null,
        ?array $urls = null,
        ?array $tag_ids = null,
        ?array $containing_groups = null,
        ?array $sub_groups = null,
        ?string $front_image = null,
        ?string $back_image = null,
        ?CustomFieldsInput $custom_fields = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->aliases = $aliases;
        $self->duration = $duration;
        $self->date = $date;
        $self->rating100 = $rating100;
        $self->studio_id = $studio_id;
        $self->director = $director;
        $self->synopsis = $synopsis;
        $self->urls = $urls;
        $self->tag_ids = $tag_ids;
        $self->containing_groups = $containing_groups;
        $self->sub_groups = $sub_groups;
        $self->front_image = $front_image;
        $self->back_image = $back_image;
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
        if (isset($data['studio_id'])) {
            $self->studio_id = $data['studio_id'];
        }
        if (isset($data['director'])) {
            $self->director = $data['director'];
        }
        if (isset($data['synopsis'])) {
            $self->synopsis = $data['synopsis'];
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }
        if (isset($data['containing_groups'])) {
            $self->containing_groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\GroupDescriptionInput::fromArray($data);
            }, $data['containing_groups'] ?? []);
        }
        if (isset($data['sub_groups'])) {
            $self->sub_groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\GroupDescriptionInput::fromArray($data);
            }, $data['sub_groups'] ?? []);
        }
        if (isset($data['front_image'])) {
            $self->front_image = $data['front_image'];
        }
        if (isset($data['back_image'])) {
            $self->back_image = $data['back_image'];
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = \Aazsamir\Stasphp\Graphpql\CustomFieldsInput::fromArray($data['custom_fields']);
        }

        return $self;
    }
}
