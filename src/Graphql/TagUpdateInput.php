<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class TagUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?string $name;
    public ?string $sort_name;
    public ?string $description;

    /** @var array<string> */
    public ?array $aliases;
    public ?bool $ignore_auto_tag;
    public ?bool $favorite;
    public ?string $image;

    /** @var array<\Aazsamir\Stasphp\Graphql\StashIDInput> */
    public ?array $stash_ids;

    /** @var array<string> */
    public ?array $parent_ids;

    /** @var array<string> */
    public ?array $child_ids;
    public ?CustomFieldsInput $custom_fields;

    /**
     * @param array<string> $aliases
     * @param array<\Aazsamir\Stasphp\Graphql\StashIDInput> $stash_ids
     * @param array<string> $parent_ids
     * @param array<string> $child_ids
     */
    public static function new(
        string $id,
        ?string $name = null,
        ?string $sort_name = null,
        ?string $description = null,
        ?array $aliases = null,
        ?bool $ignore_auto_tag = null,
        ?bool $favorite = null,
        ?string $image = null,
        ?array $stash_ids = null,
        ?array $parent_ids = null,
        ?array $child_ids = null,
        ?CustomFieldsInput $custom_fields = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->sort_name = $sort_name;
        $self->description = $description;
        $self->aliases = $aliases;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->favorite = $favorite;
        $self->image = $image;
        $self->stash_ids = $stash_ids;
        $self->parent_ids = $parent_ids;
        $self->child_ids = $child_ids;
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
        if (isset($data['sort_name'])) {
            $self->sort_name = $data['sort_name'];
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }
        if (isset($data['aliases'])) {
            $self->aliases = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['aliases'] ?? []);
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['favorite'])) {
            $self->favorite = $data['favorite'];
        }
        if (isset($data['image'])) {
            $self->image = $data['image'];
        }
        if (isset($data['stash_ids'])) {
            $self->stash_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\StashIDInput::fromArray($data);
            }, $data['stash_ids'] ?? []);
        }
        if (isset($data['parent_ids'])) {
            $self->parent_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['parent_ids'] ?? []);
        }
        if (isset($data['child_ids'])) {
            $self->child_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['child_ids'] ?? []);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = \Aazsamir\Stasphp\Graphql\CustomFieldsInput::fromArray($data['custom_fields']);
        }

        return $self;
    }
}
