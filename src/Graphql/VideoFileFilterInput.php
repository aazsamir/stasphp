<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class VideoFileFilterInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?ResolutionCriterionInput $resolution;
    public ?OrientationCriterionInput $orientation;
    public ?IntCriterionInput $framerate;
    public ?IntCriterionInput $bitrate;
    public ?StringCriterionInput $format;
    public ?StringCriterionInput $video_codec;
    public ?StringCriterionInput $audio_codec;
    public ?IntCriterionInput $duration;
    public ?StringCriterionInput $captions;
    public ?bool $interactive;
    public ?IntCriterionInput $interactive_speed;

    public static function new(
        ?ResolutionCriterionInput $resolution = null,
        ?OrientationCriterionInput $orientation = null,
        ?IntCriterionInput $framerate = null,
        ?IntCriterionInput $bitrate = null,
        ?StringCriterionInput $format = null,
        ?StringCriterionInput $video_codec = null,
        ?StringCriterionInput $audio_codec = null,
        ?IntCriterionInput $duration = null,
        ?StringCriterionInput $captions = null,
        ?bool $interactive = null,
        ?IntCriterionInput $interactive_speed = null,
    ): self {
        $self = new self();
        $self->resolution = $resolution;
        $self->orientation = $orientation;
        $self->framerate = $framerate;
        $self->bitrate = $bitrate;
        $self->format = $format;
        $self->video_codec = $video_codec;
        $self->audio_codec = $audio_codec;
        $self->duration = $duration;
        $self->captions = $captions;
        $self->interactive = $interactive;
        $self->interactive_speed = $interactive_speed;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['resolution'])) {
            $self->resolution = \Aazsamir\Stasphp\Graphql\ResolutionCriterionInput::fromArray($data['resolution']);
        }
        if (isset($data['orientation'])) {
            $self->orientation = \Aazsamir\Stasphp\Graphql\OrientationCriterionInput::fromArray($data['orientation']);
        }
        if (isset($data['framerate'])) {
            $self->framerate = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['framerate']);
        }
        if (isset($data['bitrate'])) {
            $self->bitrate = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['bitrate']);
        }
        if (isset($data['format'])) {
            $self->format = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['format']);
        }
        if (isset($data['video_codec'])) {
            $self->video_codec = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['video_codec']);
        }
        if (isset($data['audio_codec'])) {
            $self->audio_codec = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['audio_codec']);
        }
        if (isset($data['duration'])) {
            $self->duration = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['duration']);
        }
        if (isset($data['captions'])) {
            $self->captions = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['captions']);
        }
        if (isset($data['interactive'])) {
            $self->interactive = $data['interactive'];
        }
        if (isset($data['interactive_speed'])) {
            $self->interactive_speed = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['interactive_speed']);
        }

        return $self;
    }
}
