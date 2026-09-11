<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class BackupDatabaseInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $download;
    public ?bool $includeBlobs;

    public static function new(?bool $download = null, ?bool $includeBlobs = null): self
    {
        $self = new self();
        $self->download = $download;
        $self->includeBlobs = $includeBlobs;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['download'])) {
            $self->download = $data['download'];
        }
        if (isset($data['includeBlobs'])) {
            $self->includeBlobs = $data['includeBlobs'];
        }

        return $self;
    }
}
