<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class TimestampCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $value;
    public ?string $value2;
    public CriterionModifier $modifier;

    public static function new(string $value, CriterionModifier $modifier, ?string $value2 = null): self
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
        if (isset($data['value'])) {
            $self->value = $data['value'];
        }
        if (isset($data['modifier'])) {
            $self->modifier = \Aazsamir\Stasphp\Graphql\CriterionModifier::from($data['modifier']);
        }
        if (isset($data['value2'])) {
            $self->value2 = $data['value2'];
        }

        return $self;
    }
}
