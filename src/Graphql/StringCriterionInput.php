<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StringCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $value;
    public CriterionModifier $modifier;

    public static function new(string $value, CriterionModifier $modifier): self
    {
        $self = new self();
        $self->value = $value;
        $self->modifier = $modifier;

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

        return $self;
    }
}
