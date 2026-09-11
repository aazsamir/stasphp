<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class StashIDCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $endpoint;
    public ?string $stash_id;
    public CriterionModifier $modifier;

    public static function new(CriterionModifier $modifier, ?string $endpoint = null, ?string $stash_id = null): self
    {
        $self = new self();
        $self->modifier = $modifier;
        $self->endpoint = $endpoint;
        $self->stash_id = $stash_id;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['modifier'])) {
            $self->modifier = \Aazsamir\Stasphp\Graphpql\CriterionModifier::from($data['modifier']);
        }
        if (isset($data['endpoint'])) {
            $self->endpoint = $data['endpoint'];
        }
        if (isset($data['stash_id'])) {
            $self->stash_id = $data['stash_id'];
        }

        return $self;
    }
}
