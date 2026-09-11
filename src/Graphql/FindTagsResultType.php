<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FindTagsResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Tag> */
    public array $tags;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindTagsResultTypeField<mixed>
     */
    public static function count(): Fields\FindTagsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindTagsResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\FindTagsResultTypeField<\Aazsamir\Stasphp\Graphpql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\FindTagsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\FindTagsResultTypeField::tags();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\Tag> $tags
     */
    public static function new(int $count, array $tags): self
    {
        $self = new self();
        $self->count = $count;
        $self->tags = $tags;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }

        return $self;
    }
}
