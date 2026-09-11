<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Plugin implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $name;
    public ?string $description;
    public ?string $url;
    public ?string $version;
    public bool $enabled;

    /** @var array<\Aazsamir\Stasphp\Graphpql\PluginTask> */
    public ?array $tasks;

    /** @var array<\Aazsamir\Stasphp\Graphpql\PluginHook> */
    public ?array $hooks;

    /** @var array<\Aazsamir\Stasphp\Graphpql\PluginSetting> */
    public ?array $settings;

    /** @var array<string> */
    public ?array $requires;
    public PluginPaths $paths;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<mixed>
     */
    public static function id(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<mixed>
     */
    public static function name(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<mixed>
     */
    public static function description(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<mixed>
     */
    public static function url(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<mixed>
     */
    public static function version(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::version();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<mixed>
     */
    public static function enabled(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::enabled();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<\Aazsamir\Stasphp\Graphpql\SelectionSet\PluginTaskSelectionSet>
     */
    public static function tasks(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::tasks();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<\Aazsamir\Stasphp\Graphpql\SelectionSet\PluginHookSelectionSet>
     */
    public static function hooks(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::hooks();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<\Aazsamir\Stasphp\Graphpql\SelectionSet\PluginSettingSelectionSet>
     */
    public static function settings(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::settings();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<mixed>
     */
    public static function requires(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::requires();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginField<\Aazsamir\Stasphp\Graphpql\SelectionSet\PluginPathsSelectionSet>
     */
    public static function paths(): Fields\PluginField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginField::paths();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\PluginTask> $tasks
     * @param array<\Aazsamir\Stasphp\Graphpql\PluginHook> $hooks
     * @param array<\Aazsamir\Stasphp\Graphpql\PluginSetting> $settings
     * @param array<string> $requires
     */
    public static function new(
        string $id,
        string $name,
        bool $enabled,
        PluginPaths $paths,
        ?string $description = null,
        ?string $url = null,
        ?string $version = null,
        ?array $tasks = null,
        ?array $hooks = null,
        ?array $settings = null,
        ?array $requires = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->enabled = $enabled;
        $self->paths = $paths;
        $self->description = $description;
        $self->url = $url;
        $self->version = $version;
        $self->tasks = $tasks;
        $self->hooks = $hooks;
        $self->settings = $settings;
        $self->requires = $requires;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['enabled'])) {
            $self->enabled = $data['enabled'];
        }
        if (isset($data['paths'])) {
            $self->paths = \Aazsamir\Stasphp\Graphpql\PluginPaths::fromArray($data['paths']);
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['version'])) {
            $self->version = $data['version'];
        }
        if (isset($data['tasks'])) {
            $self->tasks = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\PluginTask::fromArray($data);
            }, $data['tasks'] ?? []);
        }
        if (isset($data['hooks'])) {
            $self->hooks = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\PluginHook::fromArray($data);
            }, $data['hooks'] ?? []);
        }
        if (isset($data['settings'])) {
            $self->settings = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\PluginSetting::fromArray($data);
            }, $data['settings'] ?? []);
        }
        if (isset($data['requires'])) {
            $self->requires = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['requires'] ?? []);
        }

        return $self;
    }
}
