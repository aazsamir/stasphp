<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ConfigDefaultSettingsResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?ScanMetadataOptions $scan;
    public ?IdentifyMetadataTaskOptions $identify;
    public ?AutoTagMetadataOptions $autoTag;
    public ?GenerateMetadataOptions $generate;
    public ?bool $deleteFile;
    public ?bool $deleteGenerated;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScanMetadataOptionsSelectionSet>
     */
    public static function scan(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField::scan();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\IdentifyMetadataTaskOptionsSelectionSet>
     */
    public static function identify(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField::identify();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\AutoTagMetadataOptionsSelectionSet>
     */
    public static function autoTag(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField::autoTag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GenerateMetadataOptionsSelectionSet>
     */
    public static function generate(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField::generate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField<mixed>
     */
    public static function deleteFile(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField::deleteFile();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField<mixed>
     */
    public static function deleteGenerated(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigDefaultSettingsResultField::deleteGenerated();
    }

    public static function new(
        ?ScanMetadataOptions $scan = null,
        ?IdentifyMetadataTaskOptions $identify = null,
        ?AutoTagMetadataOptions $autoTag = null,
        ?GenerateMetadataOptions $generate = null,
        ?bool $deleteFile = null,
        ?bool $deleteGenerated = null,
    ): self {
        $self = new self();
        $self->scan = $scan;
        $self->identify = $identify;
        $self->autoTag = $autoTag;
        $self->generate = $generate;
        $self->deleteFile = $deleteFile;
        $self->deleteGenerated = $deleteGenerated;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['scan'])) {
            $self->scan = \Aazsamir\Stasphp\Graphpql\ScanMetadataOptions::fromArray($data['scan']);
        }
        if (isset($data['identify'])) {
            $self->identify = \Aazsamir\Stasphp\Graphpql\IdentifyMetadataTaskOptions::fromArray($data['identify']);
        }
        if (isset($data['autoTag'])) {
            $self->autoTag = \Aazsamir\Stasphp\Graphpql\AutoTagMetadataOptions::fromArray($data['autoTag']);
        }
        if (isset($data['generate'])) {
            $self->generate = \Aazsamir\Stasphp\Graphpql\GenerateMetadataOptions::fromArray($data['generate']);
        }
        if (isset($data['deleteFile'])) {
            $self->deleteFile = $data['deleteFile'];
        }
        if (isset($data['deleteGenerated'])) {
            $self->deleteGenerated = $data['deleteGenerated'];
        }

        return $self;
    }
}
