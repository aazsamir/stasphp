<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashIDsCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $endpoint;

    /** @var array<string> */
    public ?array $stash_ids;
    public CriterionModifier $modifier;

    /**
     * @param array<string> $stash_ids
     */
    public static function new(CriterionModifier $modifier, ?string $endpoint = null, ?array $stash_ids = null): self
    {
        $self = new self();
        $self->modifier = $modifier;
        $self->endpoint = $endpoint;
        $self->stash_ids = $stash_ids;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['modifier'])) {
            $self->modifier = \Aazsamir\Stasphp\Graphql\CriterionModifier::from($data['modifier']);
        }
        if (isset($data['endpoint'])) {
            $self->endpoint = $data['endpoint'];
        }
        if (isset($data['stash_ids'])) {
            $self->stash_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['stash_ids'] ?? []);
        }

        return $self;
    }
}
