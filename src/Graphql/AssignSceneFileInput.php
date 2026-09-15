<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class AssignSceneFileInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $scene_id;
    public string $file_id;

    public static function new(string $scene_id, string $file_id): self
    {
        $self = new self();
        $self->scene_id = $scene_id;
        $self->file_id = $file_id;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['scene_id'])) {
            $self->scene_id = $data['scene_id'];
        }
        if (isset($data['file_id'])) {
            $self->file_id = $data['file_id'];
        }

        return $self;
    }
}
