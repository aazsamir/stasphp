<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneStreamEndpoint implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $url;
    public ?string $mime_type;
    public ?string $label;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneStreamEndpointField<mixed>
     */
    public static function url(): Fields\SceneStreamEndpointField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneStreamEndpointField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneStreamEndpointField<mixed>
     */
    public static function mime_type(): Fields\SceneStreamEndpointField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneStreamEndpointField::mime_type();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneStreamEndpointField<mixed>
     */
    public static function label(): Fields\SceneStreamEndpointField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneStreamEndpointField::label();
    }

    public static function new(string $url, ?string $mime_type = null, ?string $label = null): self
    {
        $self = new self();
        $self->url = $url;
        $self->mime_type = $mime_type;
        $self->label = $label;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('url', $data)) {
            $self->url = $data['url'];
        }
        if (array_key_exists('mime_type', $data)) {
            $self->mime_type = $data['mime_type'];
        }
        if (array_key_exists('label', $data)) {
            $self->label = $data['label'];
        }

        return $self;
    }
}
