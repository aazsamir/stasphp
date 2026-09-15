<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapeSingleGroupInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $query;
    public ?string $group_id;
    public ?ScrapedGroupInput $group_input;

    public static function new(
        ?string $query = null,
        ?string $group_id = null,
        ?ScrapedGroupInput $group_input = null,
    ): self {
        $self = new self();
        $self->query = $query;
        $self->group_id = $group_id;
        $self->group_input = $group_input;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['query'])) {
            $self->query = $data['query'];
        }
        if (isset($data['group_id'])) {
            $self->group_id = $data['group_id'];
        }
        if (isset($data['group_input'])) {
            $self->group_input = \Aazsamir\Stasphp\Graphql\ScrapedGroupInput::fromArray($data['group_input']);
        }

        return $self;
    }
}
