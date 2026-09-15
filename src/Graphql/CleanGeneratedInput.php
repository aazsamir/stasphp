<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class CleanGeneratedInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $blobFiles;
    public ?bool $sprites;
    public ?bool $screenshots;
    public ?bool $transcodes;
    public ?bool $markers;
    public ?bool $imageThumbnails;
    public ?bool $dryRun;

    public static function new(
        ?bool $blobFiles = null,
        ?bool $sprites = null,
        ?bool $screenshots = null,
        ?bool $transcodes = null,
        ?bool $markers = null,
        ?bool $imageThumbnails = null,
        ?bool $dryRun = null,
    ): self {
        $self = new self();
        $self->blobFiles = $blobFiles;
        $self->sprites = $sprites;
        $self->screenshots = $screenshots;
        $self->transcodes = $transcodes;
        $self->markers = $markers;
        $self->imageThumbnails = $imageThumbnails;
        $self->dryRun = $dryRun;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['blobFiles'])) {
            $self->blobFiles = $data['blobFiles'];
        }
        if (isset($data['sprites'])) {
            $self->sprites = $data['sprites'];
        }
        if (isset($data['screenshots'])) {
            $self->screenshots = $data['screenshots'];
        }
        if (isset($data['transcodes'])) {
            $self->transcodes = $data['transcodes'];
        }
        if (isset($data['markers'])) {
            $self->markers = $data['markers'];
        }
        if (isset($data['imageThumbnails'])) {
            $self->imageThumbnails = $data['imageThumbnails'];
        }
        if (isset($data['dryRun'])) {
            $self->dryRun = $data['dryRun'];
        }

        return $self;
    }
}
