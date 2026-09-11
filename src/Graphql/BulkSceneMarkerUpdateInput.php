<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class BulkSceneMarkerUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $ids;
    public ?string $title;
    public ?string $primary_tag_id;
    public ?BulkUpdateIds $tag_ids;

    /**
     * @param array<string> $ids
     */
    public static function new(
        ?array $ids = null,
        ?string $title = null,
        ?string $primary_tag_id = null,
        ?BulkUpdateIds $tag_ids = null,
    ): self {
        $self = new self();
        $self->ids = $ids;
        $self->title = $title;
        $self->primary_tag_id = $primary_tag_id;
        $self->tag_ids = $tag_ids;

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
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['primary_tag_id'])) {
            $self->primary_tag_id = $data['primary_tag_id'];
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = \Aazsamir\Stasphp\Graphpql\BulkUpdateIds::fromArray($data['tag_ids']);
        }

        return $self;
    }
}
