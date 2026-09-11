<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class CircumcisionCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphpql\CircumcisedEnum> */
    public ?array $value;
    public CriterionModifier $modifier;

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\CircumcisedEnum> $value
     */
    public static function new(CriterionModifier $modifier, ?array $value = null): self
    {
        $self = new self();
        $self->modifier = $modifier;
        $self->value = $value;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['modifier'])) {
            $self->modifier = \Aazsamir\Stasphp\Graphpql\CriterionModifier::from($data['modifier']);
        }
        if (isset($data['value'])) {
            $self->value = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\CircumcisedEnum::from($data);
            }, $data['value'] ?? []);
        }

        return $self;
    }
}
