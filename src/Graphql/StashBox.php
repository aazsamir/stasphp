<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashBox implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $endpoint;
    public string $api_key;
    public string $name;
    public int $max_requests_per_minute;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxField<mixed>
     */
    public static function endpoint(): Fields\StashBoxField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxField::endpoint();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxField<mixed>
     */
    public static function api_key(): Fields\StashBoxField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxField::api_key();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxField<mixed>
     */
    public static function name(): Fields\StashBoxField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxField<mixed>
     */
    public static function max_requests_per_minute(): Fields\StashBoxField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxField::max_requests_per_minute();
    }

    public static function new(string $endpoint, string $api_key, string $name, int $max_requests_per_minute): self
    {
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
