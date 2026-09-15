<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashIDInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $endpoint;
    public string $stash_id;
    public ?\DateTimeInterface $updated_at;

    public static function new(string $endpoint, string $stash_id, ?\DateTimeInterface $updated_at = null): self
    {
        $self = new self();
        $self->endpoint = $endpoint;
        $self->stash_id = $stash_id;
        $self->updated_at = $updated_at;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['endpoint'])) {
            $self->endpoint = $data['endpoint'];
        }
        if (isset($data['stash_id'])) {
            $self->stash_id = $data['stash_id'];
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }

        return $self;
    }
}
