<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Fingerprint implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $type;
    public string $value;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FingerprintField<mixed>
     */
    public static function type(): Fields\FingerprintField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FingerprintField::type();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FingerprintField<mixed>
     */
    public static function value(): Fields\FingerprintField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FingerprintField::value();
    }

    public static function new(string $type, string $value): self
    {
        $self = new self();
        $self->type = $type;
        $self->value = $value;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('type', $data)) {
            $self->type = $data['type'];
        }
        if (array_key_exists('value', $data)) {
            $self->value = $data['value'];
        }

        return $self;
    }
}
