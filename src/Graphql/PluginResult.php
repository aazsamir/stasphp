<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class PluginResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $error;
    public ?string $result;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginResultField<mixed>
     */
    public static function error(): Fields\PluginResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginResultField::error();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginResultField<mixed>
     */
    public static function result(): Fields\PluginResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginResultField::result();
    }

    public static function new(?string $error = null, ?string $result = null): self
    {
        $self = new self();
        $self->error = $error;
        $self->result = $result;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('error', $data)) {
            $self->error = $data['error'];
        }
        if (array_key_exists('result', $data)) {
            $self->result = $data['result'];
        }

        return $self;
    }
}
