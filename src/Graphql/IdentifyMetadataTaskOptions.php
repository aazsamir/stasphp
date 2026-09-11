<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class IdentifyMetadataTaskOptions implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphpql\IdentifySource> */
    public array $sources;
    public ?IdentifyMetadataOptions $options;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataTaskOptionsField<\Aazsamir\Stasphp\Graphpql\SelectionSet\IdentifySourceSelectionSet>
     */
    public static function sources(): Fields\IdentifyMetadataTaskOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataTaskOptionsField::sources();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataTaskOptionsField<\Aazsamir\Stasphp\Graphpql\SelectionSet\IdentifyMetadataOptionsSelectionSet>
     */
    public static function options(): Fields\IdentifyMetadataTaskOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataTaskOptionsField::options();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\IdentifySource> $sources
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
        if (isset($data['sources'])) {
            $self->sources = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\IdentifySource::fromArray($data);
            }, $data['sources'] ?? []);
        }
        if (isset($data['options'])) {
            $self->options = \Aazsamir\Stasphp\Graphpql\IdentifyMetadataOptions::fromArray($data['options']);
        }

        return $self;
    }
}
