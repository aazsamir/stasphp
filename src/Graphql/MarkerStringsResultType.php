<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class MarkerStringsResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;
    public string $id;
    public string $title;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\MarkerStringsResultTypeField<mixed>
     */
    public static function count(): Fields\MarkerStringsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\MarkerStringsResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\MarkerStringsResultTypeField<mixed>
     */
    public static function id(): Fields\MarkerStringsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\MarkerStringsResultTypeField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\MarkerStringsResultTypeField<mixed>
     */
    public static function title(): Fields\MarkerStringsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\MarkerStringsResultTypeField::title();
    }

    public static function new(int $count, string $id, string $title): self
    {
        $self = new self();
        $self->count = $count;
        $self->id = $id;
        $self->title = $title;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }

        return $self;
    }
}
