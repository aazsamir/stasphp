<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneMergeInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public array $source;
    public string $destination;
    public ?SceneUpdateInput $values;
    public ?bool $play_history;
    public ?bool $o_history;

    /**
     * @param array<string> $source
     */
    public static function new(
        array $source,
        string $destination,
        ?SceneUpdateInput $values = null,
        ?bool $play_history = null,
        ?bool $o_history = null,
    ): self {
        $self = new self();
        $self->source = $source;
        $self->destination = $destination;
        $self->values = $values;
        $self->play_history = $play_history;
        $self->o_history = $o_history;

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
            $self->values = \Aazsamir\Stasphp\Graphql\SceneUpdateInput::fromArray($data['values']);
        }
        if (isset($data['play_history'])) {
            $self->play_history = $data['play_history'];
        }
        if (isset($data['o_history'])) {
            $self->o_history = $data['o_history'];
        }

        return $self;
    }
}
