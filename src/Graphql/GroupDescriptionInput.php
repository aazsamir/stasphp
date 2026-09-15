<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GroupDescriptionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $group_id;
    public ?string $description;

    public static function new(string $group_id, ?string $description = null): self
    {
        $self = new self();
        $self->group_id = $group_id;
        $self->description = $description;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['group_id'])) {
            $self->group_id = $data['group_id'];
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }

        return $self;
    }
}
