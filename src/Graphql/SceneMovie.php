<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneMovie implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public Movie $movie;
    public ?int $scene_index;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMovieField<\Aazsamir\Stasphp\Graphql\SelectionSet\MovieSelectionSet>
     */
    public static function movie(): Fields\SceneMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMovieField::movie();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMovieField<mixed>
     */
    public static function scene_index(): Fields\SceneMovieField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMovieField::scene_index();
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
            $self->movie = \Aazsamir\Stasphp\Graphql\Movie::fromArray($data['movie']);
        }
        if (isset($data['scene_index'])) {
            $self->scene_index = $data['scene_index'];
        }

        return $self;
    }
}
