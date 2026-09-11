<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneMovieInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $movie_id;
    public ?int $scene_index;

    public static function new(string $movie_id, ?int $scene_index = null): self
    {
        $self = new self();
        $self->movie_id = $movie_id;
        $self->scene_index = $scene_index;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['movie_id'])) {
            $self->movie_id = $data['movie_id'];
        }
        if (isset($data['scene_index'])) {
            $self->scene_index = $data['scene_index'];
        }

        return $self;
    }
}
