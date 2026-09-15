<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SetFingerprintsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $type;
    public ?string $value;

    public static function new(string $type, ?string $value = null): self
    {
        $self = new self();
        $self->type = $type;
        $self->value = $value;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['type'])) {
            $self->type = $data['type'];
        }
        if (isset($data['value'])) {
            $self->value = $data['value'];
        }

        return $self;
    }
}
