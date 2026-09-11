<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SetupInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $configLocation;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashConfigInput> */
    public array $stashes;
    public ?bool $sfwContentMode;
    public string $databaseFile;
    public string $generatedLocation;
    public string $cacheLocation;
    public bool $storeBlobsInDatabase;
    public string $blobsLocation;

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\StashConfigInput> $stashes
     */
    public static function new(
        string $configLocation,
        array $stashes,
        string $databaseFile,
        string $generatedLocation,
        string $cacheLocation,
        bool $storeBlobsInDatabase,
        string $blobsLocation,
        ?bool $sfwContentMode = null,
    ): self {
        $self = new self();
        $self->configLocation = $configLocation;
        $self->stashes = $stashes;
        $self->databaseFile = $databaseFile;
        $self->generatedLocation = $generatedLocation;
        $self->cacheLocation = $cacheLocation;
        $self->storeBlobsInDatabase = $storeBlobsInDatabase;
        $self->blobsLocation = $blobsLocation;
        $self->sfwContentMode = $sfwContentMode;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['configLocation'])) {
            $self->configLocation = $data['configLocation'];
        }
        if (isset($data['stashes'])) {
            $self->stashes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\StashConfigInput::fromArray($data);
            }, $data['stashes'] ?? []);
        }
        if (isset($data['databaseFile'])) {
            $self->databaseFile = $data['databaseFile'];
        }
        if (isset($data['generatedLocation'])) {
            $self->generatedLocation = $data['generatedLocation'];
        }
        if (isset($data['cacheLocation'])) {
            $self->cacheLocation = $data['cacheLocation'];
        }
        if (isset($data['storeBlobsInDatabase'])) {
            $self->storeBlobsInDatabase = $data['storeBlobsInDatabase'];
        }
        if (isset($data['blobsLocation'])) {
            $self->blobsLocation = $data['blobsLocation'];
        }
        if (isset($data['sfwContentMode'])) {
            $self->sfwContentMode = $data['sfwContentMode'];
        }

        return $self;
    }
}
