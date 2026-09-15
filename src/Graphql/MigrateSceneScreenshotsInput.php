<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class MigrateSceneScreenshotsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $deleteFiles;
    public ?bool $overwriteExisting;

    public static function new(?bool $deleteFiles = null, ?bool $overwriteExisting = null): self
    {
        $self = new self();
        $self->deleteFiles = $deleteFiles;
        $self->overwriteExisting = $overwriteExisting;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['deleteFiles'])) {
            $self->deleteFiles = $data['deleteFiles'];
        }
        if (isset($data['overwriteExisting'])) {
            $self->overwriteExisting = $data['overwriteExisting'];
        }

        return $self;
    }
}
