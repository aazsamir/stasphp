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
        if (array_key_exists('source', $data)) {
            $self->source = \Aazsamir\Stasphp\Graphql\ScraperSourceInput::fromArray($data['source']);
        }
        if (array_key_exists('options', $data)) {
            $self->options = \Aazsamir\Stasphp\Graphql\IdentifyMetadataOptionsInput::fromArray($data['options']);
        }

        return $self;
    }
}
