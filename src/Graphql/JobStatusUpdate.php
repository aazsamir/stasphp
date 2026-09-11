<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class JobStatusUpdate implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public JobStatusUpdateType $type;
    public Job $job;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobStatusUpdateField<mixed>
     */
    public static function type(): Fields\JobStatusUpdateField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobStatusUpdateField::type();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\JobStatusUpdateField<\Aazsamir\Stasphp\Graphpql\SelectionSet\JobSelectionSet>
     */
    public static function job(): Fields\JobStatusUpdateField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\JobStatusUpdateField::job();
    }

    public static function new(JobStatusUpdateType $type, Job $job): self
    {
        $self = new self();
        $self->type = $type;
        $self->job = $job;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['type'])) {
            $self->type = \Aazsamir\Stasphp\Graphpql\JobStatusUpdateType::from($data['type']);
        }
        if (isset($data['job'])) {
            $self->job = \Aazsamir\Stasphp\Graphpql\Job::fromArray($data['job']);
        }

        return $self;
    }
}
