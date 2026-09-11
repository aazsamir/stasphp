<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

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
        if (isset($data['scenes'])) {
            $self->scenes = \Aazsamir\Stasphp\Graphpql\ExportObjectTypeInput::fromArray($data['scenes']);
        }
        if (isset($data['images'])) {
            $self->images = \Aazsamir\Stasphp\Graphpql\ExportObjectTypeInput::fromArray($data['images']);
        }
        if (isset($data['studios'])) {
            $self->studios = \Aazsamir\Stasphp\Graphpql\ExportObjectTypeInput::fromArray($data['studios']);
        }
        if (isset($data['performers'])) {
            $self->performers = \Aazsamir\Stasphp\Graphpql\ExportObjectTypeInput::fromArray($data['performers']);
        }
        if (isset($data['tags'])) {
            $self->tags = \Aazsamir\Stasphp\Graphpql\ExportObjectTypeInput::fromArray($data['tags']);
        }
        if (isset($data['groups'])) {
            $self->groups = \Aazsamir\Stasphp\Graphpql\ExportObjectTypeInput::fromArray($data['groups']);
        }
        if (isset($data['movies'])) {
            $self->movies = \Aazsamir\Stasphp\Graphpql\ExportObjectTypeInput::fromArray($data['movies']);
        }
        if (isset($data['galleries'])) {
            $self->galleries = \Aazsamir\Stasphp\Graphpql\ExportObjectTypeInput::fromArray($data['galleries']);
        }
        if (isset($data['includeDependencies'])) {
            $self->includeDependencies = $data['includeDependencies'];
        }

        return $self;
    }
}
