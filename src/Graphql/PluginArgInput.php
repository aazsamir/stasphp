<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class PluginArgInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $key;
    public ?PluginValueInput $value;

    public static function new(string $key, ?PluginValueInput $value = null): self
    {
        $self = new self();
        $self->key = $key;
        $self->value = $value;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['key'])) {
            $self->key = $data['key'];
        }
        if (isset($data['value'])) {
            $self->value = \Aazsamir\Stasphp\Graphpql\PluginValueInput::fromArray($data['value']);
        }

        return $self;
    }
}
