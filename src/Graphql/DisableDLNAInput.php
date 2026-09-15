<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class DisableDLNAInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?int $duration;

    public static function new(?int $duration = null): self
    {
        $self = new self();
        $self->duration = $duration;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }

        return $self;
    }
}
