<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindStudiosResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Studio> */
    public array $studios;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindStudiosResultTypeField<mixed>
     */
    public static function count(): Fields\FindStudiosResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindStudiosResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindStudiosResultTypeField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StudioSelectionSet>
     */
    public static function studios(): Fields\FindStudiosResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindStudiosResultTypeField::studios();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\Studio> $studios
     */
    public static function new(int $count, array $studios): self
    {
        $self = new self();
        $self->count = $count;
        $self->studios = $studios;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['studios'])) {
            $self->studios = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Studio::fromArray($data);
            }, $data['studios'] ?? []);
        }

        return $self;
    }
}
