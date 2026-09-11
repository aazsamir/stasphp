<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SystemStatus implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?int $databaseSchema;
    public ?string $databasePath;
    public ?string $configPath;
    public int $appSchema;
    public SystemStatusEnum $status;
    public string $os;
    public string $workingDir;
    public string $homeDir;
    public ?string $ffmpegPath;
    public ?string $ffprobePath;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function databaseSchema(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::databaseSchema();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function databasePath(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::databasePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function configPath(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::configPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function appSchema(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::appSchema();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function status(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::status();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function os(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::os();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function workingDir(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::workingDir();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function homeDir(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::homeDir();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function ffmpegPath(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::ffmpegPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField<mixed>
     */
    public static function ffprobePath(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SystemStatusField::ffprobePath();
    }

    public static function new(
        int $appSchema,
        SystemStatusEnum $status,
        string $os,
        string $workingDir,
        string $homeDir,
        ?int $databaseSchema = null,
        ?string $databasePath = null,
        ?string $configPath = null,
        ?string $ffmpegPath = null,
        ?string $ffprobePath = null,
    ): self {
        $self = new self();
        $self->appSchema = $appSchema;
        $self->status = $status;
        $self->os = $os;
        $self->workingDir = $workingDir;
        $self->homeDir = $homeDir;
        $self->databaseSchema = $databaseSchema;
        $self->databasePath = $databasePath;
        $self->configPath = $configPath;
        $self->ffmpegPath = $ffmpegPath;
        $self->ffprobePath = $ffprobePath;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['appSchema'])) {
            $self->appSchema = $data['appSchema'];
        }
        if (isset($data['status'])) {
            $self->status = \Aazsamir\Stasphp\Graphpql\SystemStatusEnum::from($data['status']);
        }
        if (isset($data['os'])) {
            $self->os = $data['os'];
        }
        if (isset($data['workingDir'])) {
            $self->workingDir = $data['workingDir'];
        }
        if (isset($data['homeDir'])) {
            $self->homeDir = $data['homeDir'];
        }
        if (isset($data['databaseSchema'])) {
            $self->databaseSchema = $data['databaseSchema'];
        }
        if (isset($data['databasePath'])) {
            $self->databasePath = $data['databasePath'];
        }
        if (isset($data['configPath'])) {
            $self->configPath = $data['configPath'];
        }
        if (isset($data['ffmpegPath'])) {
            $self->ffmpegPath = $data['ffmpegPath'];
        }
        if (isset($data['ffprobePath'])) {
            $self->ffprobePath = $data['ffprobePath'];
        }

        return $self;
    }
}
