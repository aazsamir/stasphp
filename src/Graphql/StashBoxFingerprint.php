<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashBoxFingerprint implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $algorithm;
    public string $hash;
    public int $duration;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxFingerprintField<mixed>
     */
    public static function algorithm(): Fields\StashBoxFingerprintField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxFingerprintField::algorithm();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxFingerprintField<mixed>
     */
    public static function hash(): Fields\StashBoxFingerprintField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxFingerprintField::hash();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxFingerprintField<mixed>
     */
    public static function duration(): Fields\StashBoxFingerprintField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxFingerprintField::duration();
    }

    public static function new(string $algorithm, string $hash, int $duration): self
    {
        $self = new self();
        $self->algorithm = $algorithm;
        $self->hash = $hash;
        $self->duration = $duration;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['algorithm'])) {
            $self->algorithm = $data['algorithm'];
        }
        if (isset($data['hash'])) {
            $self->hash = $data['hash'];
        }
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }

        return $self;
    }
}
