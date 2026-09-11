<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class VideoCaption implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $language_code;
    public string $caption_type;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoCaptionField<mixed>
     */
    public static function language_code(): Fields\VideoCaptionField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoCaptionField::language_code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\VideoCaptionField<mixed>
     */
    public static function caption_type(): Fields\VideoCaptionField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\VideoCaptionField::caption_type();
    }

    public static function new(string $language_code, string $caption_type): self
    {
        $self = new self();
        $self->language_code = $language_code;
        $self->caption_type = $caption_type;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['language_code'])) {
            $self->language_code = $data['language_code'];
        }
        if (isset($data['caption_type'])) {
            $self->caption_type = $data['caption_type'];
        }

        return $self;
    }
}
