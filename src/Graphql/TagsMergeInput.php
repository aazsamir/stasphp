<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class TagsMergeInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public array $source;
    public string $destination;
    public ?TagUpdateInput $values;

    /**
     * @param array<string> $source
     */
    public static function new(array $source, string $destination, ?TagUpdateInput $values = null): self
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
        if (isset($data['source'])) {
            $self->source = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['source'] ?? []);
        }
        if (isset($data['destination'])) {
            $self->destination = $data['destination'];
        }
        if (isset($data['values'])) {
            $self->values = \Aazsamir\Stasphp\Graphpql\TagUpdateInput::fromArray($data['values']);
        }

        return $self;
    }
}
