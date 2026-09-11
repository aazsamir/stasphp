<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class BulkTagUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $ids;
    public ?string $description;
    public ?BulkUpdateStrings $aliases;
    public ?bool $ignore_auto_tag;
    public ?bool $favorite;
    public ?BulkUpdateIds $parent_ids;
    public ?BulkUpdateIds $child_ids;

    /**
     * @param array<string> $ids
     */
    public static function new(
        ?array $ids = null,
        ?string $description = null,
        ?BulkUpdateStrings $aliases = null,
        ?bool $ignore_auto_tag = null,
        ?bool $favorite = null,
        ?BulkUpdateIds $parent_ids = null,
        ?BulkUpdateIds $child_ids = null,
    ): self {
        $self = new self();
        $self->ids = $ids;
        $self->description = $description;
        $self->aliases = $aliases;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->favorite = $favorite;
        $self->parent_ids = $parent_ids;
        $self->child_ids = $child_ids;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['ids'])) {
            $self->ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['ids'] ?? []);
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }
        if (isset($data['aliases'])) {
            $self->aliases = \Aazsamir\Stasphp\Graphpql\BulkUpdateStrings::fromArray($data['aliases']);
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['favorite'])) {
            $self->favorite = $data['favorite'];
        }
        if (isset($data['parent_ids'])) {
            $self->parent_ids = \Aazsamir\Stasphp\Graphpql\BulkUpdateIds::fromArray($data['parent_ids']);
        }
        if (isset($data['child_ids'])) {
            $self->child_ids = \Aazsamir\Stasphp\Graphpql\BulkUpdateIds::fromArray($data['child_ids']);
        }

        return $self;
    }
}
