<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class PluginHook implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $name;
    public ?string $description;

    /** @var array<string> */
    public ?array $hooks;
    public Plugin $plugin;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginHookField<mixed>
     */
    public static function name(): Fields\PluginHookField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginHookField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginHookField<mixed>
     */
    public static function description(): Fields\PluginHookField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginHookField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginHookField<mixed>
     */
    public static function hooks(): Fields\PluginHookField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginHookField::hooks();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginHookField<\Aazsamir\Stasphp\Graphpql\SelectionSet\PluginSelectionSet>
     */
    public static function plugin(): Fields\PluginHookField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginHookField::plugin();
    }

    /**
     * @param array<string> $hooks
     */
    public static function new(string $name, Plugin $plugin, ?string $description = null, ?array $hooks = null): self
    {
        $self = new self();
        $self->name = $name;
        $self->plugin = $plugin;
        $self->description = $description;
        $self->hooks = $hooks;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['plugin'])) {
            $self->plugin = \Aazsamir\Stasphp\Graphpql\Plugin::fromArray($data['plugin']);
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }
        if (isset($data['hooks'])) {
            $self->hooks = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['hooks'] ?? []);
        }

        return $self;
    }
}
