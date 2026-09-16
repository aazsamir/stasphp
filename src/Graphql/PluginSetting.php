<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class PluginSetting implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $name;
    public ?string $display_name;
    public ?string $description;
    public PluginSettingTypeEnum $type;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginSettingField<mixed>
     */
    public static function name(): Fields\PluginSettingField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginSettingField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginSettingField<mixed>
     */
    public static function display_name(): Fields\PluginSettingField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginSettingField::display_name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginSettingField<mixed>
     */
    public static function description(): Fields\PluginSettingField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginSettingField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PluginSettingField<mixed>
     */
    public static function type(): Fields\PluginSettingField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PluginSettingField::type();
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
        if (array_key_exists('name', $data)) {
            $self->name = $data['name'];
        }
        if (array_key_exists('type', $data)) {
            $self->type = \Aazsamir\Stasphp\Graphql\PluginSettingTypeEnum::from($data['type']);
        }
        if (array_key_exists('display_name', $data)) {
            $self->display_name = $data['display_name'];
        }
        if (array_key_exists('description', $data)) {
            $self->description = $data['description'];
        }

        return $self;
    }
}
