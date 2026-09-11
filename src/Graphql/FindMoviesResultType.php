<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindMoviesResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Movie> */
    public array $movies;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindMoviesResultTypeField<mixed>
     */
    public static function count(): Fields\FindMoviesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindMoviesResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindMoviesResultTypeField<\Aazsamir\Stasphp\Graphpql\SelectionSet\MovieSelectionSet>
     */
    public static function movies(): Fields\FindMoviesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindMoviesResultTypeField::movies();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\Movie> $movies
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
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['movies'])) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Movie::fromArray($data);
            }, $data['movies'] ?? []);
        }

        return $self;
    }
}
