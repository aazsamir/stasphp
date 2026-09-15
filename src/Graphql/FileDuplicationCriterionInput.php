<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FileDuplicationCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $duplicated;
    public ?int $distance;
    public ?bool $phash;

    public static function new(?bool $duplicated = null, ?int $distance = null, ?bool $phash = null): self
    {
        $self = new self();
        $self->duplicated = $duplicated;
        $self->distance = $distance;
        $self->phash = $phash;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['duplicated'])) {
            $self->duplicated = $data['duplicated'];
        }
        if (isset($data['distance'])) {
            $self->distance = $data['distance'];
        }
        if (isset($data['phash'])) {
            $self->phash = $data['phash'];
        }

        return $self;
    }
}
