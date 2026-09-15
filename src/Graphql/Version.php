<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Version implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $version;
    public string $hash;
    public string $build_time;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\VersionField<mixed>
     */
    public static function version(): Fields\VersionField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\VersionField::version();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\VersionField<mixed>
     */
    public static function hash(): Fields\VersionField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\VersionField::hash();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\VersionField<mixed>
     */
    public static function build_time(): Fields\VersionField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\VersionField::build_time();
    }

    public static function new(string $hash, string $build_time, ?string $version = null): self
    {
        $self = new self();
        $self->hash = $hash;
        $self->build_time = $build_time;
        $self->version = $version;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['hash'])) {
            $self->hash = $data['hash'];
        }
        if (isset($data['build_time'])) {
            $self->build_time = $data['build_time'];
        }
        if (isset($data['version'])) {
            $self->version = $data['version'];
        }

        return $self;
    }
}
