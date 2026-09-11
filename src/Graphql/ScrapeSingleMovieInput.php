<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ScrapeSingleMovieInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $query;
    public ?string $movie_id;
    public ?ScrapedMovieInput $movie_input;

    public static function new(
        ?string $query = null,
        ?string $movie_id = null,
        ?ScrapedMovieInput $movie_input = null,
    ): self {
        $self = new self();
        $self->query = $query;
        $self->movie_id = $movie_id;
        $self->movie_input = $movie_input;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['query'])) {
            $self->query = $data['query'];
        }
        if (isset($data['movie_id'])) {
            $self->movie_id = $data['movie_id'];
        }
        if (isset($data['movie_input'])) {
            $self->movie_input = \Aazsamir\Stasphp\Graphpql\ScrapedMovieInput::fromArray($data['movie_input']);
        }

        return $self;
    }
}
