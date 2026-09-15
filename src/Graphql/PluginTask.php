<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class PluginTask implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $name;
    public ?string $description;
    public Plugin $plugin;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginTaskField<mixed>
     */
    public static function name(): Fields\PluginTaskField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginTaskField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginTaskField<mixed>
     */
    public static function description(): Fields\PluginTaskField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginTaskField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginTaskField<\Aazsamir\Stasphp\Graphql\SelectionSet\PluginSelectionSet>
     */
    public static function plugin(): Fields\PluginTaskField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginTaskField::plugin();
    }

    public static function new(string $name, Plugin $plugin, ?string $description = null): self
    {
        $self = new self();
        $self->name = $name;
        $self->plugin = $plugin;
        $self->description = $description;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['plugin'])) {
            $self->plugin = \Aazsamir\Stasphp\Graphql\Plugin::fromArray($data['plugin']);
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }

        return $self;
    }
}
