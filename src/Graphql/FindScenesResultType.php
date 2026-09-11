<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindScenesResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;
    public float $duration;
    public float $filesize;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Scene> */
    public array $scenes;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindScenesResultTypeField<mixed>
     */
    public static function count(): Fields\FindScenesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindScenesResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindScenesResultTypeField<mixed>
     */
    public static function duration(): Fields\FindScenesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindScenesResultTypeField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindScenesResultTypeField<mixed>
     */
    public static function filesize(): Fields\FindScenesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindScenesResultTypeField::filesize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindScenesResultTypeField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneSelectionSet>
     */
    public static function scenes(): Fields\FindScenesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindScenesResultTypeField::scenes();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\Scene> $scenes
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
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }
        if (isset($data['filesize'])) {
            $self->filesize = $data['filesize'];
        }
        if (isset($data['scenes'])) {
            $self->scenes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Scene::fromArray($data);
            }, $data['scenes'] ?? []);
        }

        return $self;
    }
}
