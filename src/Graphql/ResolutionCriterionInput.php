<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ResolutionCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ResolutionEnum $value;
    public CriterionModifier $modifier;

    public static function new(ResolutionEnum $value, CriterionModifier $modifier): self
    {
        $self = new self();
        $self->value = $value;
        $self->modifier = $modifier;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['value'])) {
            $self->value = \Aazsamir\Stasphp\Graphpql\ResolutionEnum::from($data['value']);
        }
        if (isset($data['modifier'])) {
            $self->modifier = \Aazsamir\Stasphp\Graphpql\CriterionModifier::from($data['modifier']);
        }

        return $self;
    }
}
