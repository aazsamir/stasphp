<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneStreamEndpoint implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $url;
    public ?string $mime_type;
    public ?string $label;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneStreamEndpointField<mixed>
     */
    public static function url(): Fields\SceneStreamEndpointField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneStreamEndpointField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneStreamEndpointField<mixed>
     */
    public static function mime_type(): Fields\SceneStreamEndpointField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneStreamEndpointField::mime_type();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneStreamEndpointField<mixed>
     */
    public static function label(): Fields\SceneStreamEndpointField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneStreamEndpointField::label();
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
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['mime_type'])) {
            $self->mime_type = $data['mime_type'];
        }
        if (isset($data['label'])) {
            $self->label = $data['label'];
        }

        return $self;
    }
}
