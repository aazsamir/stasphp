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
        if (isset($data['previewSegments'])) {
            $self->previewSegments = $data['previewSegments'];
        }
        if (isset($data['previewSegmentDuration'])) {
            $self->previewSegmentDuration = $data['previewSegmentDuration'];
        }
        if (isset($data['previewExcludeStart'])) {
            $self->previewExcludeStart = $data['previewExcludeStart'];
        }
        if (isset($data['previewExcludeEnd'])) {
            $self->previewExcludeEnd = $data['previewExcludeEnd'];
        }
        if (isset($data['previewPreset'])) {
            $self->previewPreset = \Aazsamir\Stasphp\Graphql\PreviewPreset::from($data['previewPreset']);
        }

        return $self;
    }
}
