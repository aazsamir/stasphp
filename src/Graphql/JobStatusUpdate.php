<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class JobStatusUpdate implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public JobStatusUpdateType $type;
    public Job $job;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobStatusUpdateField<mixed>
     */
    public static function type(): Fields\JobStatusUpdateField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobStatusUpdateField::type();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\JobStatusUpdateField<\Aazsamir\Stasphp\Graphql\SelectionSet\JobSelectionSet>
     */
    public static function job(): Fields\JobStatusUpdateField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\JobStatusUpdateField::job();
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
            $self->type = \Aazsamir\Stasphp\Graphql\JobStatusUpdateType::from($data['type']);
        }
        if (isset($data['job'])) {
            $self->job = \Aazsamir\Stasphp\Graphql\Job::fromArray($data['job']);
        }

        return $self;
    }
}
