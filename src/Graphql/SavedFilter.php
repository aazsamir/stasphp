<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField<mixed>
     */
    public static function id(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField<mixed>
     */
    public static function mode(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField::mode();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField<mixed>
     */
    public static function name(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField<mixed>
     */
    public static function filter(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField::filter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField<\Aazsamir\Stasphp\Graphql\SelectionSet\SavedFindFilterTypeSelectionSet>
     */
    public static function find_filter(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField::find_filter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField<mixed>
     */
    public static function object_filter(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField::object_filter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField<mixed>
     */
    public static function ui_options(): Fields\SavedFilterField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SavedFilterField::ui_options();
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
            $self->mode = \Aazsamir\Stasphp\Graphql\FilterMode::from($data['mode']);
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['filter'])) {
            $self->filter = $data['filter'];
        }
        if (isset($data['find_filter'])) {
            $self->find_filter = \Aazsamir\Stasphp\Graphql\SavedFindFilterType::fromArray($data['find_filter']);
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
