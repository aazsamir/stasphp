<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class BulkUpdateStrings implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $values;
    public BulkUpdateIdMode $mode;

    /**
     * @param array<string> $values
     */
    public static function new(BulkUpdateIdMode $mode, ?array $values = null): self
    {
        $self = new self();
        $self->mode = $mode;
        $self->values = $values;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['mode'])) {
            $self->mode = \Aazsamir\Stasphp\Graphql\BulkUpdateIdMode::from($data['mode']);
        }
        if (isset($data['values'])) {
            $self->values = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['values'] ?? []);
        }

        return $self;
    }
}
