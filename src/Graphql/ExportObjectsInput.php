<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ExportObjectsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?ExportObjectTypeInput $scenes;
    public ?ExportObjectTypeInput $images;
    public ?ExportObjectTypeInput $studios;
    public ?ExportObjectTypeInput $performers;
    public ?ExportObjectTypeInput $tags;
    public ?ExportObjectTypeInput $groups;
    public ?ExportObjectTypeInput $movies;
    public ?ExportObjectTypeInput $galleries;
    public ?bool $includeDependencies;

    public static function new(
        ?ExportObjectTypeInput $scenes = null,
        ?ExportObjectTypeInput $images = null,
        ?ExportObjectTypeInput $studios = null,
        ?ExportObjectTypeInput $performers = null,
        ?ExportObjectTypeInput $tags = null,
        ?ExportObjectTypeInput $groups = null,
        ?ExportObjectTypeInput $movies = null,
        ?ExportObjectTypeInput $galleries = null,
        ?bool $includeDependencies = null,
    ): self {
        $self = new self();
        $self->scenes = $scenes;
        $self->images = $images;
        $self->studios = $studios;
        $self->performers = $performers;
        $self->tags = $tags;
        $self->groups = $groups;
        $self->movies = $movies;
        $self->galleries = $galleries;
        $self->includeDependencies = $includeDependencies;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('scenes', $data)) {
            $self->scenes = \Aazsamir\Stasphp\Graphql\ExportObjectTypeInput::fromArray($data['scenes']);
        }
        if (array_key_exists('images', $data)) {
            $self->images = \Aazsamir\Stasphp\Graphql\ExportObjectTypeInput::fromArray($data['images']);
        }
        if (array_key_exists('studios', $data)) {
            $self->studios = \Aazsamir\Stasphp\Graphql\ExportObjectTypeInput::fromArray($data['studios']);
        }
        if (array_key_exists('performers', $data)) {
            $self->performers = \Aazsamir\Stasphp\Graphql\ExportObjectTypeInput::fromArray($data['performers']);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = \Aazsamir\Stasphp\Graphql\ExportObjectTypeInput::fromArray($data['tags']);
        }
        if (array_key_exists('groups', $data)) {
            $self->groups = \Aazsamir\Stasphp\Graphql\ExportObjectTypeInput::fromArray($data['groups']);
        }
        if (array_key_exists('movies', $data)) {
            $self->movies = \Aazsamir\Stasphp\Graphql\ExportObjectTypeInput::fromArray($data['movies']);
        }
        if (array_key_exists('galleries', $data)) {
            $self->galleries = \Aazsamir\Stasphp\Graphql\ExportObjectTypeInput::fromArray($data['galleries']);
        }
        if (array_key_exists('includeDependencies', $data)) {
            $self->includeDependencies = $data['includeDependencies'];
        }

        return $self;
    }
}
