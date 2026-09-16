<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindMoviesResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphql\Movie> */
    public array $movies;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindMoviesResultTypeField<mixed>
     */
    public static function count(): Fields\FindMoviesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindMoviesResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindMoviesResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\MovieSelectionSet>
     */
    public static function movies(): Fields\FindMoviesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindMoviesResultTypeField::movies();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Movie> $movies
     */
    public static function new(int $count, array $movies): self
    {
        $self = new self();
        $self->count = $count;
        $self->movies = $movies;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('count', $data)) {
            $self->count = $data['count'];
        }
        if (array_key_exists('movies', $data)) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Movie::fromArray($data);
            }, $data['movies'] ?? []);
        }

        return $self;
    }
}
