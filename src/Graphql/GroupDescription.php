<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class GroupDescription implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public Group $group;
    public ?string $description;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupDescriptionField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GroupSelectionSet>
     */
    public static function group(): Fields\GroupDescriptionField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupDescriptionField::group();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\GroupDescriptionField<mixed>
     */
    public static function description(): Fields\GroupDescriptionField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\GroupDescriptionField::description();
    }

    public static function new(Group $group, ?string $description = null): self
    {
        $self = new self();
        $self->group = $group;
        $self->description = $description;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['group'])) {
            $self->group = \Aazsamir\Stasphp\Graphpql\Group::fromArray($data['group']);
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }

        return $self;
    }
}
