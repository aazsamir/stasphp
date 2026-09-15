<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneMarkerFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?HierarchicalMultiCriterionInput $tags;
    public ?HierarchicalMultiCriterionInput $scene_tags;
    public ?MultiCriterionInput $performers;
    public ?MultiCriterionInput $scenes;
    public ?FloatCriterionInput $duration;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;
    public ?DateCriterionInput $scene_date;
    public ?TimestampCriterionInput $scene_created_at;
    public ?TimestampCriterionInput $scene_updated_at;
    public ?SceneFilterType $scene_filter;

    public static function new(
        ?HierarchicalMultiCriterionInput $tags = null,
        ?HierarchicalMultiCriterionInput $scene_tags = null,
        ?MultiCriterionInput $performers = null,
        ?MultiCriterionInput $scenes = null,
        ?FloatCriterionInput $duration = null,
        ?TimestampCriterionInput $created_at = null,
        ?TimestampCriterionInput $updated_at = null,
        ?DateCriterionInput $scene_date = null,
        ?TimestampCriterionInput $scene_created_at = null,
        ?TimestampCriterionInput $scene_updated_at = null,
        ?SceneFilterType $scene_filter = null,
    ): self {
        $self = new self();
        $self->tags = $tags;
        $self->scene_tags = $scene_tags;
        $self->performers = $performers;
        $self->scenes = $scenes;
        $self->duration = $duration;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->scene_date = $scene_date;
        $self->scene_created_at = $scene_created_at;
        $self->scene_updated_at = $scene_updated_at;
        $self->scene_filter = $scene_filter;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['tags'])) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (isset($data['scene_tags'])) {
            $self->scene_tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['scene_tags']);
        }
        if (isset($data['performers'])) {
            $self->performers = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (isset($data['scenes'])) {
            $self->scenes = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['scenes']);
        }
        if (isset($data['duration'])) {
            $self->duration = \Aazsamir\Stasphp\Graphql\FloatCriterionInput::fromArray($data['duration']);
        }
        if (isset($data['created_at'])) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (isset($data['scene_date'])) {
            $self->scene_date = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['scene_date']);
        }
        if (isset($data['scene_created_at'])) {
            $self->scene_created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['scene_created_at']);
        }
        if (isset($data['scene_updated_at'])) {
            $self->scene_updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['scene_updated_at']);
        }
        if (isset($data['scene_filter'])) {
            $self->scene_filter = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['scene_filter']);
        }

        return $self;
    }
}
