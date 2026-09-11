<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ScrapeSinglePerformerInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $query;
    public ?string $performer_id;
    public ?ScrapedPerformerInput $performer_input;

    public static function new(
        ?string $query = null,
        ?string $performer_id = null,
        ?ScrapedPerformerInput $performer_input = null,
    ): self {
        $self = new self();
        $self->query = $query;
        $self->performer_id = $performer_id;
        $self->performer_input = $performer_input;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['query'])) {
            $self->query = $data['query'];
        }
        if (isset($data['performer_id'])) {
            $self->performer_id = $data['performer_id'];
        }
        if (isset($data['performer_input'])) {
            $self->performer_input = \Aazsamir\Stasphp\Graphpql\ScrapedPerformerInput::fromArray($data['performer_input']);
        }

        return $self;
    }
}
