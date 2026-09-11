<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $q;
    public ?int $page;
    public ?int $per_page;
    public ?string $sort;
    public ?SortDirectionEnum $direction;

    public static function new(
        ?string $q = null,
        ?int $page = null,
        ?int $per_page = null,
        ?string $sort = null,
        ?SortDirectionEnum $direction = null,
    ): self {
        $self = new self();
        $self->q = $q;
        $self->page = $page;
        $self->per_page = $per_page;
        $self->sort = $sort;
        $self->direction = $direction;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['q'])) {
            $self->q = $data['q'];
        }
        if (isset($data['page'])) {
            $self->page = $data['page'];
        }
        if (isset($data['per_page'])) {
            $self->per_page = $data['per_page'];
        }
        if (isset($data['sort'])) {
            $self->sort = $data['sort'];
        }
        if (isset($data['direction'])) {
            $self->direction = \Aazsamir\Stasphp\Graphpql\SortDirectionEnum::from($data['direction']);
        }

        return $self;
    }
}
