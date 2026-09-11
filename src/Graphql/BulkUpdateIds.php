<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class BulkUpdateIds implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $ids;
    public BulkUpdateIdMode $mode;

    /**
     * @param array<string> $ids
     */
    public static function new(BulkUpdateIdMode $mode, ?array $ids = null): self
    {
        $self = new self();
        $self->mode = $mode;
        $self->ids = $ids;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['mode'])) {
            $self->mode = \Aazsamir\Stasphp\Graphpql\BulkUpdateIdMode::from($data['mode']);
        }
        if (isset($data['ids'])) {
            $self->ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['ids'] ?? []);
        }

        return $self;
    }
}
