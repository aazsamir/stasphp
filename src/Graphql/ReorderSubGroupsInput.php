<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ReorderSubGroupsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $group_id;

    /** @var array<string> */
    public array $sub_group_ids;
    public string $insert_at_id;
    public ?bool $insert_after;

    /**
     * @param array<string> $sub_group_ids
     */
    public static function new(
        string $group_id,
        array $sub_group_ids,
        string $insert_at_id,
        ?bool $insert_after = null,
    ): self {
        $self = new self();
        $self->group_id = $group_id;
        $self->sub_group_ids = $sub_group_ids;
        $self->insert_at_id = $insert_at_id;
        $self->insert_after = $insert_after;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['group_id'])) {
            $self->group_id = $data['group_id'];
        }
        if (isset($data['sub_group_ids'])) {
            $self->sub_group_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['sub_group_ids'] ?? []);
        }
        if (isset($data['insert_at_id'])) {
            $self->insert_at_id = $data['insert_at_id'];
        }
        if (isset($data['insert_after'])) {
            $self->insert_after = $data['insert_after'];
        }

        return $self;
    }
}
