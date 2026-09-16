<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ConfigGeneralResult $general;
    public ConfigInterfaceResult $interface;
    public ConfigDLNAResult $dlna;
    public ConfigScrapingResult $scraping;
    public ConfigDefaultSettingsResult $defaults;
    public mixed $ui;
    public mixed $plugins;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigGeneralResultSelectionSet>
     */
    public static function general(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField::general();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigInterfaceResultSelectionSet>
     */
    public static function interface(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField::interface();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigDLNAResultSelectionSet>
     */
    public static function dlna(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField::dlna();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigScrapingResultSelectionSet>
     */
    public static function scraping(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField::scraping();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigDefaultSettingsResultSelectionSet>
     */
    public static function defaults(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField::defaults();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField<mixed>
     */
    public static function ui(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField::ui();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField<mixed>
     */
    public static function plugins(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigResultField::plugins();
    }

    public static function new(
        ConfigGeneralResult $general,
        ConfigInterfaceResult $interface,
        ConfigDLNAResult $dlna,
        ConfigScrapingResult $scraping,
        ConfigDefaultSettingsResult $defaults,
        mixed $ui,
        mixed $plugins,
    ): self {
        $self = new self();
        $self->general = $general;
        $self->interface = $interface;
        $self->dlna = $dlna;
        $self->scraping = $scraping;
        $self->defaults = $defaults;
        $self->ui = $ui;
        $self->plugins = $plugins;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('general', $data)) {
            $self->general = \Aazsamir\Stasphp\Graphql\ConfigGeneralResult::fromArray($data['general']);
        }
        if (array_key_exists('interface', $data)) {
            $self->interface = \Aazsamir\Stasphp\Graphql\ConfigInterfaceResult::fromArray($data['interface']);
        }
        if (array_key_exists('dlna', $data)) {
            $self->dlna = \Aazsamir\Stasphp\Graphql\ConfigDLNAResult::fromArray($data['dlna']);
        }
        if (array_key_exists('scraping', $data)) {
            $self->scraping = \Aazsamir\Stasphp\Graphql\ConfigScrapingResult::fromArray($data['scraping']);
        }
        if (array_key_exists('defaults', $data)) {
            $self->defaults = \Aazsamir\Stasphp\Graphql\ConfigDefaultSettingsResult::fromArray($data['defaults']);
        }
        if (array_key_exists('ui', $data)) {
            $self->ui = $data['ui'];
        }
        if (array_key_exists('plugins', $data)) {
            $self->plugins = $data['plugins'];
        }

        return $self;
    }
}
