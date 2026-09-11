<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class AutoTagMetadataInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $paths;

    /** @var array<string> */
    public ?array $performers;

    /** @var array<string> */
    public ?array $studios;

    /** @var array<string> */
    public ?array $tags;

    /**
     * @param array<string> $paths
     * @param array<string> $performers
     * @param array<string> $studios
     * @param array<string> $tags
     */
    public static function new(
        ?array $paths = null,
        ?array $performers = null,
        ?array $studios = null,
        ?array $tags = null,
    ): self {
        $self = new self();
        $self->paths = $paths;
        $self->performers = $performers;
        $self->studios = $studios;
        $self->tags = $tags;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['paths'])) {
            $self->paths = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['paths'] ?? []);
        }
        if (isset($data['performers'])) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['performers'] ?? []);
        }
        if (isset($data['studios'])) {
            $self->studios = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['studios'] ?? []);
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tags'] ?? []);
        }

        return $self;
    }
}
