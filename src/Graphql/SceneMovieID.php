<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneMovieID implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $movie_id;
    public ?string $scene_index;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMovieIDField<mixed>
     */
    public static function movie_id(): Fields\SceneMovieIDField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMovieIDField::movie_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMovieIDField<mixed>
     */
    public static function scene_index(): Fields\SceneMovieIDField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMovieIDField::scene_index();
    }

    public static function new(string $movie_id, ?string $scene_index = null): self
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
