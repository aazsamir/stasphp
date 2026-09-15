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
        if (isset($data['AND'])) {
            $self->AND = \Aazsamir\Stasphp\Graphql\MovieFilterType::fromArray($data['AND']);
        }
        if (isset($data['OR'])) {
            $self->OR = \Aazsamir\Stasphp\Graphql\MovieFilterType::fromArray($data['OR']);
        }
        if (isset($data['NOT'])) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\MovieFilterType::fromArray($data['NOT']);
        }
        if (isset($data['name'])) {
            $self->name = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['name']);
        }
        if (isset($data['director'])) {
            $self->director = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['director']);
        }
        if (isset($data['synopsis'])) {
            $self->synopsis = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['synopsis']);
        }
        if (isset($data['duration'])) {
            $self->duration = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['duration']);
        }
        if (isset($data['rating100'])) {
            $self->rating100 = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (isset($data['studios'])) {
            $self->studios = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (isset($data['is_missing'])) {
            $self->is_missing = $data['is_missing'];
        }
        if (isset($data['url'])) {
            $self->url = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['url']);
        }
        if (isset($data['performers'])) {
            $self->performers = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (isset($data['tags'])) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (isset($data['tag_count'])) {
            $self->tag_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (isset($data['date'])) {
            $self->date = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['date']);
        }
        if (isset($data['created_at'])) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (isset($data['scenes_filter'])) {
            $self->scenes_filter = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['scenes_filter']);
        }
        if (isset($data['studios_filter'])) {
            $self->studios_filter = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['studios_filter']);
        }

        return $self;
    }
}
