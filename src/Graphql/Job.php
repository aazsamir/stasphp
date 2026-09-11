<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Job implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public JobStatus $status;

    /** @var array<string> */
    public ?array $subTasks;
    public string $description;
    public ?float $progress;
    public ?\DateTimeInterface $startTime;
    public ?\DateTimeInterface $endTime;
    public \DateTimeInterface $addTime;
    public ?string $error;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function id(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function status(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::status();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function subTasks(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::subTasks();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function description(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function progress(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::progress();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function startTime(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::startTime();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function endTime(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::endTime();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function addTime(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::addTime();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobField<mixed>
     */
    public static function error(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobField::error();
    }

    /**
     * @param array<string> $subTasks
     */
    public static function new(
        string $id,
        JobStatus $status,
        string $description,
        \DateTimeInterface $addTime,
        ?array $subTasks = null,
        ?float $progress = null,
        ?\DateTimeInterface $startTime = null,
        ?\DateTimeInterface $endTime = null,
        ?string $error = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->status = $status;
        $self->description = $description;
        $self->addTime = $addTime;
        $self->subTasks = $subTasks;
        $self->progress = $progress;
        $self->startTime = $startTime;
        $self->endTime = $endTime;
        $self->error = $error;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['status'])) {
            $self->status = \Aazsamir\Stasphp\Graphpql\JobStatus::from($data['status']);
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }
        if (isset($data['addTime'])) {
            $self->addTime = new \DateTimeImmutable($data['addTime']);
        }
        if (isset($data['subTasks'])) {
            $self->subTasks = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['subTasks'] ?? []);
        }
        if (isset($data['progress'])) {
            $self->progress = $data['progress'];
        }
        if (isset($data['startTime'])) {
            $self->startTime = new \DateTimeImmutable($data['startTime']);
        }
        if (isset($data['endTime'])) {
            $self->endTime = new \DateTimeImmutable($data['endTime']);
        }
        if (isset($data['error'])) {
            $self->error = $data['error'];
        }

        return $self;
    }
}
