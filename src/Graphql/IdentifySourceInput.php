<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class IdentifySourceInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ScraperSourceInput $source;
    public ?IdentifyMetadataOptionsInput $options;

    public static function new(ScraperSourceInput $source, ?IdentifyMetadataOptionsInput $options = null): self
    {
        $self = new self();
        $self->source = $source;
        $self->options = $options;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['source'])) {
            $self->source = \Aazsamir\Stasphp\Graphql\ScraperSourceInput::fromArray($data['source']);
        }
        if (isset($data['options'])) {
            $self->options = \Aazsamir\Stasphp\Graphql\IdentifyMetadataOptionsInput::fromArray($data['options']);
        }

        return $self;
    }
}
