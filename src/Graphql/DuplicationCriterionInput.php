<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class DuplicationCriterionInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $duplicated;
    public ?int $distance;
    public ?bool $phash;
    public ?bool $url;
    public ?bool $stash_id;
    public ?bool $title;

    public static function new(
        ?bool $duplicated = null,
        ?int $distance = null,
        ?bool $phash = null,
        ?bool $url = null,
        ?bool $stash_id = null,
        ?bool $title = null,
    ): self {
        $self = new self();
        $self->duplicated = $duplicated;
        $self->distance = $distance;
        $self->phash = $phash;
        $self->url = $url;
        $self->stash_id = $stash_id;
        $self->title = $title;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['duplicated'])) {
            $self->duplicated = $data['duplicated'];
        }
        if (isset($data['distance'])) {
            $self->distance = $data['distance'];
        }
        if (isset($data['phash'])) {
            $self->phash = $data['phash'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['stash_id'])) {
            $self->stash_id = $data['stash_id'];
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }

        return $self;
    }
}
