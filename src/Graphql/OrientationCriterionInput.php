<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class OrientationCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphpql\OrientationEnum> */
    public array $value;

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\OrientationEnum> $value
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
        if (isset($data['value'])) {
            $self->value = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\OrientationEnum::from($data);
            }, $data['value'] ?? []);
        }

        return $self;
    }
}
