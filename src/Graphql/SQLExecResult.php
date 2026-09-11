<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SQLExecResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?int $rows_affected;
    public ?int $last_insert_id;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SQLExecResultField<mixed>
     */
    public static function rows_affected(): Fields\SQLExecResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SQLExecResultField::rows_affected();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SQLExecResultField<mixed>
     */
    public static function last_insert_id(): Fields\SQLExecResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SQLExecResultField::last_insert_id();
    }

    public static function new(?int $rows_affected = null, ?int $last_insert_id = null): self
    {
        $self = new self();
        $self->rows_affected = $rows_affected;
        $self->last_insert_id = $last_insert_id;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['rows_affected'])) {
            $self->rows_affected = $data['rows_affected'];
        }
        if (isset($data['last_insert_id'])) {
            $self->last_insert_id = $data['last_insert_id'];
        }

        return $self;
    }
}
