<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class IdentifySource implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ScraperSource $source;
    public ?IdentifyMetadataOptions $options;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifySourceField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScraperSourceSelectionSet>
     */
    public static function source(): Fields\IdentifySourceField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifySourceField::source();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifySourceField<\Aazsamir\Stasphp\Graphql\SelectionSet\IdentifyMetadataOptionsSelectionSet>
     */
    public static function options(): Fields\IdentifySourceField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifySourceField::options();
    }

    public static function new(ScraperSource $source, ?IdentifyMetadataOptions $options = null): self
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
            $self->source = \Aazsamir\Stasphp\Graphql\ScraperSource::fromArray($data['source']);
        }
        if (array_key_exists('options', $data)) {
            $self->options = \Aazsamir\Stasphp\Graphql\IdentifyMetadataOptions::fromArray($data['options']);
        }

        return $self;
    }
}
