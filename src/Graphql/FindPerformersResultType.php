<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindPerformersResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphql\Performer> */
    public array $performers;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindPerformersResultTypeField<mixed>
     */
    public static function count(): Fields\FindPerformersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindPerformersResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindPerformersResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\PerformerSelectionSet>
     */
    public static function performers(): Fields\FindPerformersResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindPerformersResultTypeField::performers();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Performer> $performers
     */
    public static function new(int $count, array $performers): self
    {
        $self = new self();
        $self->count = $count;
        $self->performers = $performers;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('count', $data)) {
            $self->count = $data['count'];
        }
        if (array_key_exists('performers', $data)) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Performer::fromArray($data);
            }, $data['performers'] ?? []);
        }

        return $self;
    }
}
