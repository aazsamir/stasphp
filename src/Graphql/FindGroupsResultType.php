<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindGroupsResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphql\Group> */
    public array $groups;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindGroupsResultTypeField<mixed>
     */
    public static function count(): Fields\FindGroupsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindGroupsResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindGroupsResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\GroupSelectionSet>
     */
    public static function groups(): Fields\FindGroupsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindGroupsResultTypeField::groups();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Group> $groups
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

                return \Aazsamir\Stasphp\Graphql\Group::fromArray($data);
            }, $data['groups'] ?? []);
        }

        return $self;
    }
}
