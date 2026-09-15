<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ExportObjectTypeInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $ids;
    public ?bool $all;

    /**
     * @param array<string> $ids
     */
    public static function new(?array $ids = null, ?bool $all = null): self
    {
        $self = new self();
        $self->ids = $ids;
        $self->all = $all;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['ids'])) {
            $self->ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['ids'] ?? []);
        }
        if (isset($data['all'])) {
            $self->all = $data['all'];
        }

        return $self;
    }
}
