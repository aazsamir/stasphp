<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class PerformerMergeInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public array $source;
    public string $destination;
    public ?PerformerUpdateInput $values;

    /**
     * @param array<string> $source
     */
    public static function new(array $source, string $destination, ?PerformerUpdateInput $values = null): self
    {
        $self = new self();
        $self->source = $source;
        $self->destination = $destination;
        $self->values = $values;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('source', $data)) {
            $self->source = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['source'] ?? []);
        }
        if (array_key_exists('destination', $data)) {
            $self->destination = $data['destination'];
        }
        if (array_key_exists('values', $data)) {
            $self->values = \Aazsamir\Stasphp\Graphql\PerformerUpdateInput::fromArray($data['values']);
        }

        return $self;
    }
}
