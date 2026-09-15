<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneGroup implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public Group $group;
    public ?int $scene_index;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneGroupField<\Aazsamir\Stasphp\Graphql\SelectionSet\GroupSelectionSet>
     */
    public static function group(): Fields\SceneGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneGroupField::group();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneGroupField<mixed>
     */
    public static function scene_index(): Fields\SceneGroupField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneGroupField::scene_index();
    }

    public static function new(Group $group, ?int $scene_index = null): self
    {
        $self = new self();
        $self->group = $group;
        $self->scene_index = $scene_index;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['group'])) {
            $self->group = \Aazsamir\Stasphp\Graphql\Group::fromArray($data['group']);
        }
        if (isset($data['scene_index'])) {
            $self->scene_index = $data['scene_index'];
        }

        return $self;
    }
}
