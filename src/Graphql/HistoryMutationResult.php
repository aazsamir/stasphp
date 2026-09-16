<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class HistoryMutationResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\DateTimeInterface> */
    public array $history;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\HistoryMutationResultField<mixed>
     */
    public static function count(): Fields\HistoryMutationResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\HistoryMutationResultField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\HistoryMutationResultField<mixed>
     */
    public static function history(): Fields\HistoryMutationResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\HistoryMutationResultField::history();
    }

    /**
     * @param array<\DateTimeInterface> $history
     */
    public static function new(int $count, array $history): self
    {
        $self = new self();
        $self->count = $count;
        $self->history = $history;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('count', $data)) {
            $self->count = $data['count'];
        }
        if (array_key_exists('history', $data)) {
            $self->history = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return new \DateTimeImmutable($data);
            }, $data['history'] ?? []);
        }

        return $self;
    }
}
