<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class StashBoxValidationResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public bool $valid;
    public string $status;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxValidationResultField<mixed>
     */
    public static function valid(): Fields\StashBoxValidationResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxValidationResultField::valid();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\StashBoxValidationResultField<mixed>
     */
    public static function status(): Fields\StashBoxValidationResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\StashBoxValidationResultField::status();
    }

    public static function new(bool $valid, string $status): self
    {
        $self = new self();
        $self->valid = $valid;
        $self->status = $status;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['valid'])) {
            $self->valid = $data['valid'];
        }
        if (isset($data['status'])) {
            $self->status = $data['status'];
        }

        return $self;
    }
}
