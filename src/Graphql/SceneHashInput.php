<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneHashInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $checksum;
    public ?string $oshash;

    public static function new(?string $checksum = null, ?string $oshash = null): self
    {
        $self = new self();
        $self->checksum = $checksum;
        $self->oshash = $oshash;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['checksum'])) {
            $self->checksum = $data['checksum'];
        }
        if (isset($data['oshash'])) {
            $self->oshash = $data['oshash'];
        }

        return $self;
    }
}
