<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneMarkerTag implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public Tag $tag;

    /** @var array<\Aazsamir\Stasphp\Graphql\SceneMarker> */
    public array $scene_markers;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerTagField<\Aazsamir\Stasphp\Graphql\SelectionSet\TagSelectionSet>
     */
    public static function tag(): Fields\SceneMarkerTagField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerTagField::tag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerTagField<\Aazsamir\Stasphp\Graphql\SelectionSet\SceneMarkerSelectionSet>
     */
    public static function scene_markers(): Fields\SceneMarkerTagField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerTagField::scene_markers();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\SceneMarker> $scene_markers
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
            $self->tag = \Aazsamir\Stasphp\Graphql\Tag::fromArray($data['tag']);
        }
        if (isset($data['scene_markers'])) {
            $self->scene_markers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\SceneMarker::fromArray($data);
            }, $data['scene_markers'] ?? []);
        }

        return $self;
    }
}
