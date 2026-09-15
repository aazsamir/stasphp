<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ImageDestroyInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?bool $delete_file;
    public ?bool $delete_generated;
    public ?bool $destroy_file_entry;

    public static function new(
        string $id,
        ?bool $delete_file = null,
        ?bool $delete_generated = null,
        ?bool $destroy_file_entry = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->delete_file = $delete_file;
        $self->delete_generated = $delete_generated;
        $self->destroy_file_entry = $destroy_file_entry;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['delete_file'])) {
            $self->delete_file = $data['delete_file'];
        }
        if (isset($data['delete_generated'])) {
            $self->delete_generated = $data['delete_generated'];
        }
        if (isset($data['destroy_file_entry'])) {
            $self->destroy_file_entry = $data['destroy_file_entry'];
        }

        return $self;
    }
}
