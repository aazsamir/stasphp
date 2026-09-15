<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashBoxInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $endpoint;
    public string $api_key;
    public string $name;
    public ?int $max_requests_per_minute;

    public static function new(
        string $endpoint,
        string $api_key,
        string $name,
        ?int $max_requests_per_minute = null,
    ): self {
        $self = new self();
        $self->endpoint = $endpoint;
        $self->api_key = $api_key;
        $self->name = $name;
        $self->max_requests_per_minute = $max_requests_per_minute;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['endpoint'])) {
            $self->endpoint = $data['endpoint'];
        }
        if (isset($data['api_key'])) {
            $self->api_key = $data['api_key'];
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['max_requests_per_minute'])) {
            $self->max_requests_per_minute = $data['max_requests_per_minute'];
        }

        return $self;
    }
}
