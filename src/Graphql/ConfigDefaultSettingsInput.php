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
        if (isset($data['scan'])) {
            $self->scan = \Aazsamir\Stasphp\Graphql\ScanMetadataInput::fromArray($data['scan']);
        }
        if (isset($data['identify'])) {
            $self->identify = \Aazsamir\Stasphp\Graphql\IdentifyMetadataInput::fromArray($data['identify']);
        }
        if (isset($data['autoTag'])) {
            $self->autoTag = \Aazsamir\Stasphp\Graphql\AutoTagMetadataInput::fromArray($data['autoTag']);
        }
        if (isset($data['generate'])) {
            $self->generate = \Aazsamir\Stasphp\Graphql\GenerateMetadataInput::fromArray($data['generate']);
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
