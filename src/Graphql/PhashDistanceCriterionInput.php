<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class PhashDistanceCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $value;
    public CriterionModifier $modifier;
    public ?int $distance;

    public static function new(string $value, CriterionModifier $modifier, ?int $distance = null): self
    {
        $self = new self();
        $self->value = $value;
        $self->modifier = $modifier;
        $self->distance = $distance;

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
        if (isset($data['distance'])) {
            $self->distance = $data['distance'];
        }

        return $self;
    }
}
