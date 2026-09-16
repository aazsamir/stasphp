<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class LogEntry implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public \DateTimeInterface $time;
    public LogLevel $level;
    public string $message;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\LogEntryField<mixed>
     */
    public static function time(): Fields\LogEntryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\LogEntryField::time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\LogEntryField<mixed>
     */
    public static function level(): Fields\LogEntryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\LogEntryField::level();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\LogEntryField<mixed>
     */
    public static function message(): Fields\LogEntryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\LogEntryField::message();
    }

    public static function new(\DateTimeInterface $time, LogLevel $level, string $message): self
    {
        $self = new self();
        $self->time = $time;
        $self->level = $level;
        $self->message = $message;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('time', $data)) {
            $self->time = new \DateTimeImmutable($data['time']);
        }
        if (array_key_exists('level', $data)) {
            $self->level = \Aazsamir\Stasphp\Graphql\LogLevel::from($data['level']);
        }
        if (array_key_exists('message', $data)) {
            $self->message = $data['message'];
        }

        return $self;
    }
}
