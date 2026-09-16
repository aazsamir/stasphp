<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class OrientationCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphql\OrientationEnum> */
    public array $value;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\OrientationEnum> $value
     */
    public static function new(array $value): self
    {
        $self = new self();
        $self->value = $value;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('value', $data)) {
            $self->value = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\OrientationEnum::from($data);
            }, $data['value'] ?? []);
        }

        return $self;
    }
}
