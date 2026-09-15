<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashBoxDraftSubmissionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?int $stash_box_index;
    public ?string $stash_box_endpoint;

    public static function new(string $id, ?int $stash_box_index = null, ?string $stash_box_endpoint = null): self
    {
        $self = new self();
        $self->id = $id;
        $self->stash_box_index = $stash_box_index;
        $self->stash_box_endpoint = $stash_box_endpoint;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['stash_box_index'])) {
            $self->stash_box_index = $data['stash_box_index'];
        }
        if (isset($data['stash_box_endpoint'])) {
            $self->stash_box_endpoint = $data['stash_box_endpoint'];
        }

        return $self;
    }
}
