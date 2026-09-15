<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class CustomFieldsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public mixed $full;
    public mixed $partial;

    /** @var array<string> */
    public ?array $remove;

    /**
     * @param array<string> $remove
     */
    public static function new(mixed $full = null, mixed $partial = null, ?array $remove = null): self
    {
        $self = new self();
        $self->full = $full;
        $self->partial = $partial;
        $self->remove = $remove;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['full'])) {
            $self->full = $data['full'];
        }
        if (isset($data['partial'])) {
            $self->partial = $data['partial'];
        }
        if (isset($data['remove'])) {
            $self->remove = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['remove'] ?? []);
        }

        return $self;
    }
}
