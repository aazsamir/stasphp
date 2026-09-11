<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class RemoveTempDLNAIPInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $address;

    public static function new(string $address): self
    {
        $self = new self();
        $self->address = $address;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['address'])) {
            $self->address = $data['address'];
        }

        return $self;
    }
}
