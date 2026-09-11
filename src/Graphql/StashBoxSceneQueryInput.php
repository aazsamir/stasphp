<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class StashBoxSceneQueryInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?int $stash_box_index;
    public ?string $stash_box_endpoint;

    /** @var array<string> */
    public ?array $scene_ids;
    public ?string $q;

    /**
     * @param array<string> $scene_ids
     */
    public static function new(
        ?int $stash_box_index = null,
        ?string $stash_box_endpoint = null,
        ?array $scene_ids = null,
        ?string $q = null,
    ): self {
        $self = new self();
        $self->stash_box_index = $stash_box_index;
        $self->stash_box_endpoint = $stash_box_endpoint;
        $self->scene_ids = $scene_ids;
        $self->q = $q;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['stash_box_index'])) {
            $self->stash_box_index = $data['stash_box_index'];
        }
        if (isset($data['stash_box_endpoint'])) {
            $self->stash_box_endpoint = $data['stash_box_endpoint'];
        }
        if (isset($data['scene_ids'])) {
            $self->scene_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['scene_ids'] ?? []);
        }
        if (isset($data['q'])) {
            $self->q = $data['q'];
        }

        return $self;
    }
}
