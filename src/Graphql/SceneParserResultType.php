<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneParserResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphql\SceneParserResult> */
    public array $results;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneParserResultTypeField<mixed>
     */
    public static function count(): Fields\SceneParserResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneParserResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneParserResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\SceneParserResultSelectionSet>
     */
    public static function results(): Fields\SceneParserResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneParserResultTypeField::results();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\SceneParserResult> $results
     */
    public static function new(int $count, array $results): self
    {
        $self = new self();
        $self->count = $count;
        $self->results = $results;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('count', $data)) {
            $self->count = $data['count'];
        }
        if (array_key_exists('results', $data)) {
            $self->results = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\SceneParserResult::fromArray($data);
            }, $data['results'] ?? []);
        }

        return $self;
    }
}
