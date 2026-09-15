<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GenerateMetadataOptions implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $covers;
    public ?bool $sprites;
    public ?bool $previews;
    public ?bool $imagePreviews;
    public ?GeneratePreviewOptions $previewOptions;
    public ?bool $markers;
    public ?bool $markerImagePreviews;
    public ?bool $markerScreenshots;
    public ?bool $transcodes;
    public ?bool $phashes;
    public ?bool $interactiveHeatmapsSpeeds;
    public ?bool $imageThumbnails;
    public ?bool $clipPreviews;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function covers(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::covers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function sprites(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::sprites();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function previews(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::previews();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function imagePreviews(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::imagePreviews();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<\Aazsamir\Stasphp\Graphql\SelectionSet\GeneratePreviewOptionsSelectionSet>
     */
    public static function previewOptions(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::previewOptions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function markers(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::markers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function markerImagePreviews(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::markerImagePreviews();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function markerScreenshots(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::markerScreenshots();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function transcodes(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::transcodes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function phashes(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::phashes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function interactiveHeatmapsSpeeds(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::interactiveHeatmapsSpeeds();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function imageThumbnails(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::imageThumbnails();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField<mixed>
     */
    public static function clipPreviews(): Fields\GenerateMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GenerateMetadataOptionsField::clipPreviews();
    }

    public static function new(
        ?bool $covers = null,
        ?bool $sprites = null,
        ?bool $previews = null,
        ?bool $imagePreviews = null,
        ?GeneratePreviewOptions $previewOptions = null,
        ?bool $markers = null,
        ?bool $markerImagePreviews = null,
        ?bool $markerScreenshots = null,
        ?bool $transcodes = null,
        ?bool $phashes = null,
        ?bool $interactiveHeatmapsSpeeds = null,
        ?bool $imageThumbnails = null,
        ?bool $clipPreviews = null,
    ): self {
        $self = new self();
        $self->covers = $covers;
        $self->sprites = $sprites;
        $self->previews = $previews;
        $self->imagePreviews = $imagePreviews;
        $self->previewOptions = $previewOptions;
        $self->markers = $markers;
        $self->markerImagePreviews = $markerImagePreviews;
        $self->markerScreenshots = $markerScreenshots;
        $self->transcodes = $transcodes;
        $self->phashes = $phashes;
        $self->interactiveHeatmapsSpeeds = $interactiveHeatmapsSpeeds;
        $self->imageThumbnails = $imageThumbnails;
        $self->clipPreviews = $clipPreviews;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['covers'])) {
            $self->covers = $data['covers'];
        }
        if (isset($data['sprites'])) {
            $self->sprites = $data['sprites'];
        }
        if (isset($data['previews'])) {
            $self->previews = $data['previews'];
        }
        if (isset($data['imagePreviews'])) {
            $self->imagePreviews = $data['imagePreviews'];
        }
        if (isset($data['previewOptions'])) {
            $self->previewOptions = \Aazsamir\Stasphp\Graphql\GeneratePreviewOptions::fromArray($data['previewOptions']);
        }
        if (isset($data['markers'])) {
            $self->markers = $data['markers'];
        }
        if (isset($data['markerImagePreviews'])) {
            $self->markerImagePreviews = $data['markerImagePreviews'];
        }
        if (isset($data['markerScreenshots'])) {
            $self->markerScreenshots = $data['markerScreenshots'];
        }
        if (isset($data['transcodes'])) {
            $self->transcodes = $data['transcodes'];
        }
        if (isset($data['phashes'])) {
            $self->phashes = $data['phashes'];
        }
        if (isset($data['interactiveHeatmapsSpeeds'])) {
            $self->interactiveHeatmapsSpeeds = $data['interactiveHeatmapsSpeeds'];
        }
        if (isset($data['imageThumbnails'])) {
            $self->imageThumbnails = $data['imageThumbnails'];
        }
        if (isset($data['clipPreviews'])) {
            $self->clipPreviews = $data['clipPreviews'];
        }

        return $self;
    }
}
