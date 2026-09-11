<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneMovie implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public Movie $movie;
    public ?int $scene_index;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneMovieField<\Aazsamir\Stasphp\Graphpql\SelectionSet\MovieSelectionSet>
     */
    public static function movie(): Fields\SceneMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneMovieField::movie();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneMovieField<mixed>
     */
    public static function scene_index(): Fields\SceneMovieField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneMovieField::scene_index();
    }

    public static function new(Movie $movie, ?int $scene_index = null): self
    {
        $self = new self();
        $self->movie = $movie;
        $self->scene_index = $scene_index;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['movie'])) {
            $self->movie = \Aazsamir\Stasphp\Graphpql\Movie::fromArray($data['movie']);
        }
        if (isset($data['scene_index'])) {
            $self->scene_index = $data['scene_index'];
        }

        return $self;
    }
}
