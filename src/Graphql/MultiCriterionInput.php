<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class MultiCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $value;
    public CriterionModifier $modifier;

    /** @var array<string> */
    public ?array $excludes;

    /**
     * @param array<string> $value
     * @param array<string> $excludes
     */
    public static function new(CriterionModifier $modifier, ?array $value = null, ?array $excludes = null): self
    {
        $self = new self();
        $self->modifier = $modifier;
        $self->value = $value;
        $self->excludes = $excludes;

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

                return $data;
            }, $data['value'] ?? []);
        }
        if (isset($data['excludes'])) {
            $self->excludes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['excludes'] ?? []);
        }

        return $self;
    }
}
