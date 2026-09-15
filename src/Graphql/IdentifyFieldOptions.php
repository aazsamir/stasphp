<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class IdentifyFieldOptions implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $field;
    public IdentifyFieldStrategy $strategy;
    public ?bool $createMissing;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyFieldOptionsField<mixed>
     */
    public static function field(): Fields\IdentifyFieldOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyFieldOptionsField::field();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyFieldOptionsField<mixed>
     */
    public static function strategy(): Fields\IdentifyFieldOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyFieldOptionsField::strategy();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyFieldOptionsField<mixed>
     */
    public static function createMissing(): Fields\IdentifyFieldOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyFieldOptionsField::createMissing();
    }

    public static function new(string $field, IdentifyFieldStrategy $strategy, ?bool $createMissing = null): self
    {
        $self = new self();
        $self->field = $field;
        $self->strategy = $strategy;
        $self->createMissing = $createMissing;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['field'])) {
            $self->field = $data['field'];
        }
        if (isset($data['strategy'])) {
            $self->strategy = \Aazsamir\Stasphp\Graphql\IdentifyFieldStrategy::from($data['strategy']);
        }
        if (isset($data['createMissing'])) {
            $self->createMissing = $data['createMissing'];
        }

        return $self;
    }
}
