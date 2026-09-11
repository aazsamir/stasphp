<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class CleanMetadataInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $paths;
    public ?bool $ignoreZipFileContents;
    public bool $dryRun;

    /**
     * @param array<string> $paths
     */
    public static function new(bool $dryRun, ?array $paths = null, ?bool $ignoreZipFileContents = null): self
    {
        $self = new self();
        $self->dryRun = $dryRun;
        $self->paths = $paths;
        $self->ignoreZipFileContents = $ignoreZipFileContents;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['dryRun'])) {
            $self->dryRun = $data['dryRun'];
        }
        if (isset($data['paths'])) {
            $self->paths = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['paths'] ?? []);
        }
        if (isset($data['ignoreZipFileContents'])) {
            $self->ignoreZipFileContents = $data['ignoreZipFileContents'];
        }

        return $self;
    }
}
