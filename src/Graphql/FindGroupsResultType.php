<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindGroupsResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Group> */
    public array $groups;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindGroupsResultTypeField<mixed>
     */
    public static function count(): Fields\FindGroupsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindGroupsResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindGroupsResultTypeField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GroupSelectionSet>
     */
    public static function groups(): Fields\FindGroupsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindGroupsResultTypeField::groups();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\Group> $groups
     */
    public static function new(int $count, array $groups): self
    {
        $self = new self();
        $self->count = $count;
        $self->groups = $groups;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['groups'])) {
            $self->groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Group::fromArray($data);
            }, $data['groups'] ?? []);
        }

        return $self;
    }
}
