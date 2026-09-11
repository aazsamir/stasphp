<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class PluginSetting implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $name;
    public ?string $display_name;
    public ?string $description;
    public PluginSettingTypeEnum $type;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginSettingField<mixed>
     */
    public static function name(): Fields\PluginSettingField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginSettingField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginSettingField<mixed>
     */
    public static function display_name(): Fields\PluginSettingField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginSettingField::display_name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginSettingField<mixed>
     */
    public static function description(): Fields\PluginSettingField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginSettingField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\PluginSettingField<mixed>
     */
    public static function type(): Fields\PluginSettingField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\PluginSettingField::type();
    }

    public static function new(
        string $name,
        PluginSettingTypeEnum $type,
        ?string $display_name = null,
        ?string $description = null,
    ): self {
        $self = new self();
        $self->name = $name;
        $self->type = $type;
        $self->display_name = $display_name;
        $self->description = $description;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['type'])) {
            $self->type = \Aazsamir\Stasphp\Graphpql\PluginSettingTypeEnum::from($data['type']);
        }
        if (isset($data['display_name'])) {
            $self->display_name = $data['display_name'];
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }

        return $self;
    }
}
