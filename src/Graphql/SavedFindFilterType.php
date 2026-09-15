<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SavedFindFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $q;
    public ?int $page;
    public ?int $per_page;
    public ?string $sort;
    public ?SortDirectionEnum $direction;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField<mixed>
     */
    public static function q(): Fields\SavedFindFilterTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField::q();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField<mixed>
     */
    public static function page(): Fields\SavedFindFilterTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField::page();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField<mixed>
     */
    public static function per_page(): Fields\SavedFindFilterTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField::per_page();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField<mixed>
     */
    public static function sort(): Fields\SavedFindFilterTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField::sort();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField<mixed>
     */
    public static function direction(): Fields\SavedFindFilterTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFindFilterTypeField::direction();
    }

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
            $self->direction = \Aazsamir\Stasphp\Graphql\SortDirectionEnum::from($data['direction']);
        }

        return $self;
    }
}
