<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ScrapeSingleSceneInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $query;
    public ?string $scene_id;
    public ?ScrapedSceneInput $scene_input;

    public static function new(
        ?string $query = null,
        ?string $scene_id = null,
        ?ScrapedSceneInput $scene_input = null,
    ): self {
        $self = new self();
        $self->query = $query;
        $self->scene_id = $scene_id;
        $self->scene_input = $scene_input;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['query'])) {
            $self->query = $data['query'];
        }
        if (isset($data['scene_id'])) {
            $self->scene_id = $data['scene_id'];
        }
        if (isset($data['scene_input'])) {
            $self->scene_input = \Aazsamir\Stasphp\Graphpql\ScrapedSceneInput::fromArray($data['scene_input']);
        }

        return $self;
    }
}
