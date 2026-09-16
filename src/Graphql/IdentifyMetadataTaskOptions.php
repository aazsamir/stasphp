<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class IdentifyMetadataTaskOptions implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphql\IdentifySource> */
    public array $sources;
    public ?IdentifyMetadataOptions $options;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataTaskOptionsField<\Aazsamir\Stasphp\Graphql\SelectionSet\IdentifySourceSelectionSet>
     */
    public static function sources(): Fields\IdentifyMetadataTaskOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataTaskOptionsField::sources();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataTaskOptionsField<\Aazsamir\Stasphp\Graphql\SelectionSet\IdentifyMetadataOptionsSelectionSet>
     */
    public static function options(): Fields\IdentifyMetadataTaskOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataTaskOptionsField::options();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\IdentifySource> $sources
     */
    public static function new(array $sources, ?IdentifyMetadataOptions $options = null): self
    {
        $self = new self();
        $self->sources = $sources;
        $self->options = $options;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('sources', $data)) {
            $self->sources = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\IdentifySource::fromArray($data);
            }, $data['sources'] ?? []);
        }
        if (array_key_exists('options', $data)) {
            $self->options = \Aazsamir\Stasphp\Graphql\IdentifyMetadataOptions::fromArray($data['options']);
        }

        return $self;
    }
}
