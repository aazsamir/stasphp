<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class BulkUpdateGroupDescriptionsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphql\GroupDescriptionInput> */
    public array $groups;
    public BulkUpdateIdMode $mode;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\GroupDescriptionInput> $groups
     */
    public static function new(array $groups, BulkUpdateIdMode $mode): self
    {
        $self = new self();
        $self->groups = $groups;
        $self->mode = $mode;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['groups'])) {
            $self->groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\GroupDescriptionInput::fromArray($data);
            }, $data['groups'] ?? []);
        }
        if (isset($data['mode'])) {
            $self->mode = \Aazsamir\Stasphp\Graphql\BulkUpdateIdMode::from($data['mode']);
        }

        return $self;
    }
}
