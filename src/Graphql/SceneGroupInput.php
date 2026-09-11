<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneGroupInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $group_id;
    public ?int $scene_index;

    public static function new(string $group_id, ?int $scene_index = null): self
    {
        $self = new self();
        $self->group_id = $group_id;
        $self->scene_index = $scene_index;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['group_id'])) {
            $self->group_id = $data['group_id'];
        }
        if (isset($data['scene_index'])) {
            $self->scene_index = $data['scene_index'];
        }

        return $self;
    }
}
