<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class HistoryMutationResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;

    /** @var array<\DateTimeInterface> */
    public array $history;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\HistoryMutationResultField<mixed>
     */
    public static function count(): Fields\HistoryMutationResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\HistoryMutationResultField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\HistoryMutationResultField<mixed>
     */
    public static function history(): Fields\HistoryMutationResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\HistoryMutationResultField::history();
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
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['history'])) {
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
