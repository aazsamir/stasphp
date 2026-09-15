<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigDLNAInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $serverName;
    public ?bool $enabled;
    public ?int $port;

    /** @var array<string> */
    public ?array $whitelistedIPs;

    /** @var array<string> */
    public ?array $interfaces;
    public ?string $videoSortOrder;

    /**
     * @param array<string> $whitelistedIPs
     * @param array<string> $interfaces
     */
    public static function new(
        ?string $serverName = null,
        ?bool $enabled = null,
        ?int $port = null,
        ?array $whitelistedIPs = null,
        ?array $interfaces = null,
        ?string $videoSortOrder = null,
    ): self {
        $self = new self();
        $self->serverName = $serverName;
        $self->enabled = $enabled;
        $self->port = $port;
        $self->whitelistedIPs = $whitelistedIPs;
        $self->interfaces = $interfaces;
        $self->videoSortOrder = $videoSortOrder;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['serverName'])) {
            $self->serverName = $data['serverName'];
        }
        if (isset($data['enabled'])) {
            $self->enabled = $data['enabled'];
        }
        if (isset($data['port'])) {
            $self->port = $data['port'];
        }
        if (isset($data['whitelistedIPs'])) {
            $self->whitelistedIPs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['whitelistedIPs'] ?? []);
        }
        if (isset($data['interfaces'])) {
            $self->interfaces = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['interfaces'] ?? []);
        }
        if (isset($data['videoSortOrder'])) {
            $self->videoSortOrder = $data['videoSortOrder'];
        }

        return $self;
    }
}
