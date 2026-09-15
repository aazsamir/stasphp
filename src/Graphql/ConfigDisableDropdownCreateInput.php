<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigDisableDropdownCreateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $performer;
    public ?bool $tag;
    public ?bool $studio;
    public ?bool $movie;
    public ?bool $gallery;

    public static function new(
        ?bool $performer = null,
        ?bool $tag = null,
        ?bool $studio = null,
        ?bool $movie = null,
        ?bool $gallery = null,
    ): self {
        $self = new self();
        $self->performer = $performer;
        $self->tag = $tag;
        $self->studio = $studio;
        $self->movie = $movie;
        $self->gallery = $gallery;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['performer'])) {
            $self->performer = $data['performer'];
        }
        if (isset($data['tag'])) {
            $self->tag = $data['tag'];
        }
        if (isset($data['studio'])) {
            $self->studio = $data['studio'];
        }
        if (isset($data['movie'])) {
            $self->movie = $data['movie'];
        }
        if (isset($data['gallery'])) {
            $self->gallery = $data['gallery'];
        }

        return $self;
    }
}
