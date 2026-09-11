<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class PackageSpecInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $sourceURL;

    public static function new(string $id, string $sourceURL): self
    {
        $self = new self();
        $self->id = $id;
        $self->sourceURL = $sourceURL;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['sourceURL'])) {
            $self->sourceURL = $data['sourceURL'];
        }

        return $self;
    }
}
