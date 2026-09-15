<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneMarkerUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?string $title;
    public ?float $seconds;
    public ?float $end_seconds;
    public ?string $scene_id;
    public ?string $primary_tag_id;

    /** @var array<string> */
    public ?array $tag_ids;

    /**
     * @param array<string> $tag_ids
     */
    public static function new(
        string $id,
        ?string $title = null,
        ?float $seconds = null,
        ?float $end_seconds = null,
        ?string $scene_id = null,
        ?string $primary_tag_id = null,
        ?array $tag_ids = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->title = $title;
        $self->seconds = $seconds;
        $self->end_seconds = $end_seconds;
        $self->scene_id = $scene_id;
        $self->primary_tag_id = $primary_tag_id;
        $self->tag_ids = $tag_ids;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['seconds'])) {
            $self->seconds = $data['seconds'];
        }
        if (isset($data['end_seconds'])) {
            $self->end_seconds = $data['end_seconds'];
        }
        if (isset($data['scene_id'])) {
            $self->scene_id = $data['scene_id'];
        }
        if (isset($data['primary_tag_id'])) {
            $self->primary_tag_id = $data['primary_tag_id'];
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }

        return $self;
    }
}
