<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapeSingleTagInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $query;

    public static function new(?string $query = null): self
    {
        $self = new self();
        $self->query = $query;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['query'])) {
            $self->query = $data['query'];
        }

        return $self;
    }
}
