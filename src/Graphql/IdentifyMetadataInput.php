<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class IdentifyMetadataInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphpql\IdentifySourceInput> */
    public array $sources;
    public ?IdentifyMetadataOptionsInput $options;

    /** @var array<string> */
    public ?array $sceneIDs;

    /** @var array<string> */
    public ?array $paths;

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\IdentifySourceInput> $sources
     * @param array<string> $sceneIDs
     * @param array<string> $paths
     */
    public static function new(
        array $sources,
        ?IdentifyMetadataOptionsInput $options = null,
        ?array $sceneIDs = null,
        ?array $paths = null,
    ): self {
        $self = new self();
        $self->sources = $sources;
        $self->options = $options;
        $self->sceneIDs = $sceneIDs;
        $self->paths = $paths;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['sources'])) {
            $self->sources = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\IdentifySourceInput::fromArray($data);
            }, $data['sources'] ?? []);
        }
        if (isset($data['options'])) {
            $self->options = \Aazsamir\Stasphp\Graphpql\IdentifyMetadataOptionsInput::fromArray($data['options']);
        }
        if (isset($data['sceneIDs'])) {
            $self->sceneIDs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['sceneIDs'] ?? []);
        }
        if (isset($data['paths'])) {
            $self->paths = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['paths'] ?? []);
        }

        return $self;
    }
}
