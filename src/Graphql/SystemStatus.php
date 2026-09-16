<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function databaseSchema(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::databaseSchema();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function databasePath(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::databasePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function configPath(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::configPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function appSchema(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::appSchema();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function status(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::status();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function os(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::os();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function workingDir(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::workingDir();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function homeDir(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::homeDir();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function ffmpegPath(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::ffmpegPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField<mixed>
     */
    public static function ffprobePath(): Fields\SystemStatusField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SystemStatusField::ffprobePath();
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
        if (array_key_exists('appSchema', $data)) {
            $self->appSchema = $data['appSchema'];
        }
        if (array_key_exists('status', $data)) {
            $self->status = \Aazsamir\Stasphp\Graphql\SystemStatusEnum::from($data['status']);
        }
        if (array_key_exists('os', $data)) {
            $self->os = $data['os'];
        }
        if (array_key_exists('workingDir', $data)) {
            $self->workingDir = $data['workingDir'];
        }
        if (array_key_exists('homeDir', $data)) {
            $self->homeDir = $data['homeDir'];
        }
        if (array_key_exists('databaseSchema', $data)) {
            $self->databaseSchema = $data['databaseSchema'];
        }
        if (array_key_exists('databasePath', $data)) {
            $self->databasePath = $data['databasePath'];
        }
        if (array_key_exists('configPath', $data)) {
            $self->configPath = $data['configPath'];
        }
        if (array_key_exists('ffmpegPath', $data)) {
            $self->ffmpegPath = $data['ffmpegPath'];
        }
        if (array_key_exists('ffprobePath', $data)) {
            $self->ffprobePath = $data['ffprobePath'];
        }

        return $self;
    }
}
