<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

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
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ConfigGeneralResultSelectionSet>
     */
    public static function general(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField::general();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ConfigInterfaceResultSelectionSet>
     */
    public static function interface(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField::interface();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ConfigDLNAResultSelectionSet>
     */
    public static function dlna(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField::dlna();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ConfigScrapingResultSelectionSet>
     */
    public static function scraping(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField::scraping();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ConfigDefaultSettingsResultSelectionSet>
     */
    public static function defaults(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField::defaults();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField<mixed>
     */
    public static function ui(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField::ui();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField<mixed>
     */
    public static function plugins(): Fields\ConfigResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigResultField::plugins();
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
        if (isset($data['general'])) {
            $self->general = \Aazsamir\Stasphp\Graphpql\ConfigGeneralResult::fromArray($data['general']);
        }
        if (isset($data['interface'])) {
            $self->interface = \Aazsamir\Stasphp\Graphpql\ConfigInterfaceResult::fromArray($data['interface']);
        }
        if (isset($data['dlna'])) {
            $self->dlna = \Aazsamir\Stasphp\Graphpql\ConfigDLNAResult::fromArray($data['dlna']);
        }
        if (isset($data['scraping'])) {
            $self->scraping = \Aazsamir\Stasphp\Graphpql\ConfigScrapingResult::fromArray($data['scraping']);
        }
        if (isset($data['defaults'])) {
            $self->defaults = \Aazsamir\Stasphp\Graphpql\ConfigDefaultSettingsResult::fromArray($data['defaults']);
        }
        if (isset($data['ui'])) {
            $self->ui = $data['ui'];
        }
        if (isset($data['plugins'])) {
            $self->plugins = $data['plugins'];
        }

        return $self;
    }
}
