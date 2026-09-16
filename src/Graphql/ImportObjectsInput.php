<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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
        if (array_key_exists('file', $data)) {
            $self->file = $data['file'];
        }
        if (array_key_exists('duplicateBehaviour', $data)) {
            $self->duplicateBehaviour = \Aazsamir\Stasphp\Graphql\ImportDuplicateEnum::from($data['duplicateBehaviour']);
        }
        if (array_key_exists('missingRefBehaviour', $data)) {
            $self->missingRefBehaviour = \Aazsamir\Stasphp\Graphql\ImportMissingRefEnum::from($data['missingRefBehaviour']);
        }

        return $self;
    }
}
