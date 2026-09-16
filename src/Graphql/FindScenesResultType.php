<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindScenesResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;
    public float $duration;
    public float $filesize;

    /** @var array<\Aazsamir\Stasphp\Graphql\Scene> */
    public array $scenes;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindScenesResultTypeField<mixed>
     */
    public static function count(): Fields\FindScenesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindScenesResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindScenesResultTypeField<mixed>
     */
    public static function duration(): Fields\FindScenesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindScenesResultTypeField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindScenesResultTypeField<mixed>
     */
    public static function filesize(): Fields\FindScenesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindScenesResultTypeField::filesize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindScenesResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\SceneSelectionSet>
     */
    public static function scenes(): Fields\FindScenesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindScenesResultTypeField::scenes();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Scene> $scenes
     */
    public static function new(int $count, float $duration, float $filesize, array $scenes): self
    {
        $self = new self();
        $self->count = $count;
        $self->duration = $duration;
        $self->filesize = $filesize;
        $self->scenes = $scenes;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('count', $data)) {
            $self->count = $data['count'];
        }
        if (array_key_exists('duration', $data)) {
            $self->duration = $data['duration'];
        }
        if (array_key_exists('filesize', $data)) {
            $self->filesize = $data['filesize'];
        }
        if (array_key_exists('scenes', $data)) {
            $self->scenes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Scene::fromArray($data);
            }, $data['scenes'] ?? []);
        }

        return $self;
    }
}
