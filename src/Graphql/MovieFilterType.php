<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class MovieFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?MovieFilterType $AND;
    public ?MovieFilterType $OR;
    public ?MovieFilterType $NOT;
    public ?StringCriterionInput $name;
    public ?StringCriterionInput $director;
    public ?StringCriterionInput $synopsis;
    public ?IntCriterionInput $duration;
    public ?IntCriterionInput $rating100;
    public ?HierarchicalMultiCriterionInput $studios;
    public ?string $is_missing;
    public ?StringCriterionInput $url;
    public ?MultiCriterionInput $performers;
    public ?HierarchicalMultiCriterionInput $tags;
    public ?IntCriterionInput $tag_count;
    public ?DateCriterionInput $date;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;
    public ?SceneFilterType $scenes_filter;
    public ?StudioFilterType $studios_filter;

    public static function new(
        ?MovieFilterType $AND = null,
        ?MovieFilterType $OR = null,
        ?MovieFilterType $NOT = null,
        ?StringCriterionInput $name = null,
        ?StringCriterionInput $director = null,
        ?StringCriterionInput $synopsis = null,
        ?IntCriterionInput $duration = null,
        ?IntCriterionInput $rating100 = null,
        ?HierarchicalMultiCriterionInput $studios = null,
        ?string $is_missing = null,
        ?StringCriterionInput $url = null,
        ?MultiCriterionInput $performers = null,
        ?HierarchicalMultiCriterionInput $tags = null,
        ?IntCriterionInput $tag_count = null,
        ?DateCriterionInput $date = null,
        ?TimestampCriterionInput $created_at = null,
        ?TimestampCriterionInput $updated_at = null,
        ?SceneFilterType $scenes_filter = null,
        ?StudioFilterType $studios_filter = null,
    ): self {
        $self = new self();
        $self->AND = $AND;
        $self->OR = $OR;
        $self->NOT = $NOT;
        $self->name = $name;
        $self->director = $director;
        $self->synopsis = $synopsis;
        $self->duration = $duration;
        $self->rating100 = $rating100;
        $self->studios = $studios;
        $self->is_missing = $is_missing;
        $self->url = $url;
        $self->performers = $performers;
        $self->tags = $tags;
        $self->tag_count = $tag_count;
        $self->date = $date;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->scenes_filter = $scenes_filter;
        $self->studios_filter = $studios_filter;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('AND', $data)) {
            $self->AND = \Aazsamir\Stasphp\Graphql\MovieFilterType::fromArray($data['AND']);
        }
        if (array_key_exists('OR', $data)) {
            $self->OR = \Aazsamir\Stasphp\Graphql\MovieFilterType::fromArray($data['OR']);
        }
        if (array_key_exists('NOT', $data)) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\MovieFilterType::fromArray($data['NOT']);
        }
        if (array_key_exists('name', $data)) {
            $self->name = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['name']);
        }
        if (array_key_exists('director', $data)) {
            $self->director = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['director']);
        }
        if (array_key_exists('synopsis', $data)) {
            $self->synopsis = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['synopsis']);
        }
        if (array_key_exists('duration', $data)) {
            $self->duration = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['duration']);
        }
        if (array_key_exists('rating100', $data)) {
            $self->rating100 = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (array_key_exists('studios', $data)) {
            $self->studios = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (array_key_exists('is_missing', $data)) {
            $self->is_missing = $data['is_missing'];
        }
        if (array_key_exists('url', $data)) {
            $self->url = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['url']);
        }
        if (array_key_exists('performers', $data)) {
            $self->performers = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (array_key_exists('tag_count', $data)) {
            $self->tag_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (array_key_exists('date', $data)) {
            $self->date = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['date']);
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (array_key_exists('scenes_filter', $data)) {
            $self->scenes_filter = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['scenes_filter']);
        }
        if (array_key_exists('studios_filter', $data)) {
            $self->studios_filter = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['studios_filter']);
        }

        return $self;
    }
}
