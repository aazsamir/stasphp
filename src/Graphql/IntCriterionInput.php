<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class IntCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $value;
    public ?int $value2;
    public CriterionModifier $modifier;

    public static function new(int $value, CriterionModifier $modifier, ?int $value2 = null): self
    {
        $self = new self();
        $self->value = $value;
        $self->modifier = $modifier;
        $self->value2 = $value2;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('value', $data)) {
            $self->value = $data['value'];
        }
        if (array_key_exists('modifier', $data)) {
            $self->modifier = \Aazsamir\Stasphp\Graphql\CriterionModifier::from($data['modifier']);
        }
        if (array_key_exists('value2', $data)) {
            $self->value2 = $data['value2'];
        }

        return $self;
    }
}
