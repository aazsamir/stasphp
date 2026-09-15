<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GenderCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?GenderEnum $value;

    /** @var array<\Aazsamir\Stasphp\Graphql\GenderEnum> */
    public ?array $value_list;
    public CriterionModifier $modifier;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\GenderEnum> $value_list
     */
    public static function new(
        CriterionModifier $modifier,
        ?GenderEnum $value = null,
        ?array $value_list = null,
    ): self {
        $self = new self();
        $self->modifier = $modifier;
        $self->value = $value;
        $self->value_list = $value_list;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['modifier'])) {
            $self->modifier = \Aazsamir\Stasphp\Graphql\CriterionModifier::from($data['modifier']);
        }
        if (isset($data['value'])) {
            $self->value = \Aazsamir\Stasphp\Graphql\GenderEnum::from($data['value']);
        }
        if (isset($data['value_list'])) {
            $self->value_list = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\GenderEnum::from($data);
            }, $data['value_list'] ?? []);
        }

        return $self;
    }
}
