<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class StudioCreateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $name;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $parent_id;
    public ?string $image;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashIDInput> */
    public ?array $stash_ids;
    public ?int $rating100;
    public ?bool $favorite;
    public ?string $details;

    /** @var array<string> */
    public ?array $aliases;

    /** @var array<string> */
    public ?array $tag_ids;
    public ?bool $ignore_auto_tag;
    public ?bool $organized;
    public mixed $custom_fields;

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphpql\StashIDInput> $stash_ids
     * @param array<string> $aliases
     * @param array<string> $tag_ids
     */
    public static function new(
        string $name,
        ?string $url = null,
        ?array $urls = null,
        ?string $parent_id = null,
        ?string $image = null,
        ?array $stash_ids = null,
        ?int $rating100 = null,
        ?bool $favorite = null,
        ?string $details = null,
        ?array $aliases = null,
        ?array $tag_ids = null,
        ?bool $ignore_auto_tag = null,
        ?bool $organized = null,
        mixed $custom_fields = null,
    ): self {
        $self = new self();
        $self->name = $name;
        $self->url = $url;
        $self->urls = $urls;
        $self->parent_id = $parent_id;
        $self->image = $image;
        $self->stash_ids = $stash_ids;
        $self->rating100 = $rating100;
        $self->favorite = $favorite;
        $self->details = $details;
        $self->aliases = $aliases;
        $self->tag_ids = $tag_ids;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->organized = $organized;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['name'])) {
            $self->name = $data['name'];
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
        if (isset($data['parent_id'])) {
            $self->parent_id = $data['parent_id'];
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
        if (isset($data['favorite'])) {
            $self->favorite = $data['favorite'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['aliases'])) {
            $self->aliases = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['aliases'] ?? []);
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = $data['custom_fields'];
        }

        return $self;
    }
}
