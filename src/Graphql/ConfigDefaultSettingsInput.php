<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigDefaultSettingsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?ScanMetadataInput $scan;
    public ?IdentifyMetadataInput $identify;
    public ?AutoTagMetadataInput $autoTag;
    public ?GenerateMetadataInput $generate;
    public ?bool $deleteFile;
    public ?bool $deleteGenerated;

    public static function new(
        ?ScanMetadataInput $scan = null,
        ?IdentifyMetadataInput $identify = null,
        ?AutoTagMetadataInput $autoTag = null,
        ?GenerateMetadataInput $generate = null,
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
            $self->scan = \Aazsamir\Stasphp\Graphql\ScanMetadataInput::fromArray($data['scan']);
        }
        if (array_key_exists('identify', $data)) {
            $self->identify = \Aazsamir\Stasphp\Graphql\IdentifyMetadataInput::fromArray($data['identify']);
        }
        if (array_key_exists('autoTag', $data)) {
            $self->autoTag = \Aazsamir\Stasphp\Graphql\AutoTagMetadataInput::fromArray($data['autoTag']);
        }
        if (array_key_exists('generate', $data)) {
            $self->generate = \Aazsamir\Stasphp\Graphql\GenerateMetadataInput::fromArray($data['generate']);
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
