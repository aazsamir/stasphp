<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashBoxPerformerQueryResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $query;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedPerformer> */
    public array $results;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxPerformerQueryResultField<mixed>
     */
    public static function query(): Fields\StashBoxPerformerQueryResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxPerformerQueryResultField::query();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxPerformerQueryResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedPerformerSelectionSet>
     */
    public static function results(): Fields\StashBoxPerformerQueryResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxPerformerQueryResultField::results();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedPerformer> $results
     */
    public static function new(string $query, array $results): self
    {
        $self = new self();
        $self->query = $query;
        $self->results = $results;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['query'])) {
            $self->query = $data['query'];
        }
        if (isset($data['results'])) {
            $self->results = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedPerformer::fromArray($data);
            }, $data['results'] ?? []);
        }

        return $self;
    }
}
