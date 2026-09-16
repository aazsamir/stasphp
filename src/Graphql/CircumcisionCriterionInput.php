<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class CircumcisionCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphql\CircumcisedEnum> */
    public ?array $value;
    public CriterionModifier $modifier;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\CircumcisedEnum> $value
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
        if (array_key_exists('modifier', $data)) {
            $self->modifier = \Aazsamir\Stasphp\Graphql\CriterionModifier::from($data['modifier']);
        }
        if (array_key_exists('value', $data)) {
            $self->value = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\CircumcisedEnum::from($data);
            }, $data['value'] ?? []);
        }

        return $self;
    }
}
