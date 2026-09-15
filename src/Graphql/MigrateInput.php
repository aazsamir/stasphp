<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class MigrateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $backupPath;

    public static function new(string $backupPath): self
    {
        $self = new self();
        $self->backupPath = $backupPath;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['backupPath'])) {
            $self->backupPath = $data['backupPath'];
        }

        return $self;
    }
}
