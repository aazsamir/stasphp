<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GeneratePreviewOptions implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?int $previewSegments;
    public ?float $previewSegmentDuration;
    public ?string $previewExcludeStart;
    public ?string $previewExcludeEnd;
    public ?PreviewPreset $previewPreset;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField<mixed>
     */
    public static function previewSegments(): Fields\GeneratePreviewOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField::previewSegments();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField<mixed>
     */
    public static function previewSegmentDuration(): Fields\GeneratePreviewOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField::previewSegmentDuration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField<mixed>
     */
    public static function previewExcludeStart(): Fields\GeneratePreviewOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField::previewExcludeStart();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField<mixed>
     */
    public static function previewExcludeEnd(): Fields\GeneratePreviewOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField::previewExcludeEnd();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField<mixed>
     */
    public static function previewPreset(): Fields\GeneratePreviewOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GeneratePreviewOptionsField::previewPreset();
    }

    public static function new(
        ?int $previewSegments = null,
        ?float $previewSegmentDuration = null,
        ?string $previewExcludeStart = null,
        ?string $previewExcludeEnd = null,
        ?PreviewPreset $previewPreset = null,
    ): self {
        $self = new self();
        $self->previewSegments = $previewSegments;
        $self->previewSegmentDuration = $previewSegmentDuration;
        $self->previewExcludeStart = $previewExcludeStart;
        $self->previewExcludeEnd = $previewExcludeEnd;
        $self->previewPreset = $previewPreset;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('previewSegments', $data)) {
            $self->previewSegments = $data['previewSegments'];
        }
        if (array_key_exists('previewSegmentDuration', $data)) {
            $self->previewSegmentDuration = $data['previewSegmentDuration'];
        }
        if (array_key_exists('previewExcludeStart', $data)) {
            $self->previewExcludeStart = $data['previewExcludeStart'];
        }
        if (array_key_exists('previewExcludeEnd', $data)) {
            $self->previewExcludeEnd = $data['previewExcludeEnd'];
        }
        if (array_key_exists('previewPreset', $data)) {
            $self->previewPreset = \Aazsamir\Stasphp\Graphql\PreviewPreset::from($data['previewPreset']);
        }

        return $self;
    }
}
