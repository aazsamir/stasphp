<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScanMetadataOptionsSelectionSet>
     */
    public static function scan(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField::scan();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\IdentifyMetadataTaskOptionsSelectionSet>
     */
    public static function identify(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField::identify();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\AutoTagMetadataOptionsSelectionSet>
     */
    public static function autoTag(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField::autoTag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\GenerateMetadataOptionsSelectionSet>
     */
    public static function generate(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField::generate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField<mixed>
     */
    public static function deleteFile(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField::deleteFile();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField<mixed>
     */
    public static function deleteGenerated(): Fields\ConfigDefaultSettingsResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDefaultSettingsResultField::deleteGenerated();
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
        if (array_key_exists('scan', $data)) {
            $self->scan = \Aazsamir\Stasphp\Graphql\ScanMetadataOptions::fromArray($data['scan']);
        }
        if (array_key_exists('identify', $data)) {
            $self->identify = \Aazsamir\Stasphp\Graphql\IdentifyMetadataTaskOptions::fromArray($data['identify']);
        }
        if (array_key_exists('autoTag', $data)) {
            $self->autoTag = \Aazsamir\Stasphp\Graphql\AutoTagMetadataOptions::fromArray($data['autoTag']);
        }
        if (array_key_exists('generate', $data)) {
            $self->generate = \Aazsamir\Stasphp\Graphql\GenerateMetadataOptions::fromArray($data['generate']);
        }
        if (array_key_exists('deleteFile', $data)) {
            $self->deleteFile = $data['deleteFile'];
        }
        if (array_key_exists('deleteGenerated', $data)) {
            $self->deleteGenerated = $data['deleteGenerated'];
        }

        return $self;
    }
}
