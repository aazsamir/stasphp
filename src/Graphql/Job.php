<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

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
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function id(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function status(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::status();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function subTasks(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::subTasks();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function description(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function progress(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::progress();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function startTime(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::startTime();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function endTime(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::endTime();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function addTime(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::addTime();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobField<mixed>
     */
    public static function error(): Fields\JobField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobField::error();
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
        if (array_key_exists('id', $data)) {
            $self->id = $data['id'];
        }
        if (array_key_exists('status', $data)) {
            $self->status = \Aazsamir\Stasphp\Graphql\JobStatus::from($data['status']);
        }
        if (array_key_exists('description', $data)) {
            $self->description = $data['description'];
        }
        if (array_key_exists('addTime', $data)) {
            $self->addTime = new \DateTimeImmutable($data['addTime']);
        }
        if (array_key_exists('subTasks', $data)) {
            $self->subTasks = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['subTasks'] ?? []);
        }
        if (array_key_exists('progress', $data)) {
            $self->progress = $data['progress'];
        }
        if (array_key_exists('startTime', $data)) {
            $self->startTime = new \DateTimeImmutable($data['startTime']);
        }
        if (array_key_exists('endTime', $data)) {
            $self->endTime = new \DateTimeImmutable($data['endTime']);
        }
        if (array_key_exists('error', $data)) {
            $self->error = $data['error'];
        }

        return $self;
    }
}
