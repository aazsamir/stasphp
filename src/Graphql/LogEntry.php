<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class LogEntry implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public \DateTimeInterface $time;
    public LogLevel $level;
    public string $message;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\LogEntryField<mixed>
     */
    public static function time(): Fields\LogEntryField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\LogEntryField::time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\LogEntryField<mixed>
     */
    public static function level(): Fields\LogEntryField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\LogEntryField::level();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\LogEntryField<mixed>
     */
    public static function message(): Fields\LogEntryField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\LogEntryField::message();
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
        if (isset($data['time'])) {
            $self->time = new \DateTimeImmutable($data['time']);
        }
        if (isset($data['level'])) {
            $self->level = \Aazsamir\Stasphp\Graphpql\LogLevel::from($data['level']);
        }
        if (isset($data['message'])) {
            $self->message = $data['message'];
        }

        return $self;
    }
}
