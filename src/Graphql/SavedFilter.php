<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SavedFilter implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public FilterMode $mode;
    public string $name;
    public string $filter;
    public ?SavedFindFilterType $find_filter;
    public mixed $object_filter;
    public mixed $ui_options;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField<mixed>
     */
    public static function id(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField<mixed>
     */
    public static function mode(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField::mode();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField<mixed>
     */
    public static function name(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField<mixed>
     */
    public static function filter(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField::filter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SavedFindFilterTypeSelectionSet>
     */
    public static function find_filter(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField::find_filter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField<mixed>
     */
    public static function object_filter(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField::object_filter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField<mixed>
     */
    public static function ui_options(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SavedFilterField::ui_options();
    }

    public static function new(
        string $id,
        FilterMode $mode,
        string $name,
        string $filter,
        ?SavedFindFilterType $find_filter = null,
        mixed $object_filter = null,
        mixed $ui_options = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->mode = $mode;
        $self->name = $name;
        $self->filter = $filter;
        $self->find_filter = $find_filter;
        $self->object_filter = $object_filter;
        $self->ui_options = $ui_options;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['mode'])) {
            $self->mode = \Aazsamir\Stasphp\Graphpql\FilterMode::from($data['mode']);
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['filter'])) {
            $self->filter = $data['filter'];
        }
        if (isset($data['find_filter'])) {
            $self->find_filter = \Aazsamir\Stasphp\Graphpql\SavedFindFilterType::fromArray($data['find_filter']);
        }
        if (isset($data['object_filter'])) {
            $self->object_filter = $data['object_filter'];
        }
        if (isset($data['ui_options'])) {
            $self->ui_options = $data['ui_options'];
        }

        return $self;
    }
}
