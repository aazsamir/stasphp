<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GroupSubGroupAddInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $containing_group_id;

    /** @var array<\Aazsamir\Stasphp\Graphql\GroupDescriptionInput> */
    public array $sub_groups;
    public ?int $insert_index;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\GroupDescriptionInput> $sub_groups
     */
    public static function new(string $containing_group_id, array $sub_groups, ?int $insert_index = null): self
    {
        $self = new self();
        $self->containing_group_id = $containing_group_id;
        $self->sub_groups = $sub_groups;
        $self->insert_index = $insert_index;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['containing_group_id'])) {
            $self->containing_group_id = $data['containing_group_id'];
        }
        if (isset($data['sub_groups'])) {
            $self->sub_groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\GroupDescriptionInput::fromArray($data);
            }, $data['sub_groups'] ?? []);
        }
        if (isset($data['insert_index'])) {
            $self->insert_index = $data['insert_index'];
        }

        return $self;
    }
}
