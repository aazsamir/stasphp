<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneMarkerTag implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public Tag $tag;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SceneMarker> */
    public array $scene_markers;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneMarkerTagField<\Aazsamir\Stasphp\Graphpql\SelectionSet\TagSelectionSet>
     */
    public static function tag(): Fields\SceneMarkerTagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneMarkerTagField::tag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneMarkerTagField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneMarkerSelectionSet>
     */
    public static function scene_markers(): Fields\SceneMarkerTagField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneMarkerTagField::scene_markers();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneMarker> $scene_markers
     */
    public static function new(Tag $tag, array $scene_markers): self
    {
        $self = new self();
        $self->tag = $tag;
        $self->scene_markers = $scene_markers;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['tag'])) {
            $self->tag = \Aazsamir\Stasphp\Graphpql\Tag::fromArray($data['tag']);
        }
        if (isset($data['scene_markers'])) {
            $self->scene_markers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SceneMarker::fromArray($data);
            }, $data['scene_markers'] ?? []);
        }

        return $self;
    }
}
