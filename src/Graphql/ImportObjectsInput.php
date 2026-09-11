<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ImportObjectsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public mixed $file;
    public ImportDuplicateEnum $duplicateBehaviour;
    public ImportMissingRefEnum $missingRefBehaviour;

    public static function new(
        mixed $file,
        ImportDuplicateEnum $duplicateBehaviour,
        ImportMissingRefEnum $missingRefBehaviour,
    ): self {
        $self = new self();
        $self->file = $file;
        $self->duplicateBehaviour = $duplicateBehaviour;
        $self->missingRefBehaviour = $missingRefBehaviour;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['file'])) {
            $self->file = $data['file'];
        }
        if (isset($data['duplicateBehaviour'])) {
            $self->duplicateBehaviour = \Aazsamir\Stasphp\Graphpql\ImportDuplicateEnum::from($data['duplicateBehaviour']);
        }
        if (isset($data['missingRefBehaviour'])) {
            $self->missingRefBehaviour = \Aazsamir\Stasphp\Graphpql\ImportMissingRefEnum::from($data['missingRefBehaviour']);
        }

        return $self;
    }
}
