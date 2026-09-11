<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class GenerateMetadataInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $covers;
    public ?bool $sprites;
    public ?bool $previews;
    public ?bool $imagePreviews;
    public ?GeneratePreviewOptionsInput $previewOptions;
    public ?bool $markers;
    public ?bool $markerImagePreviews;
    public ?bool $markerScreenshots;
    public ?bool $transcodes;
    public ?bool $forceTranscodes;
    public ?bool $phashes;
    public ?bool $interactiveHeatmapsSpeeds;
    public ?bool $imagePhashes;
    public ?bool $imageThumbnails;
    public ?bool $clipPreviews;

    /** @var array<string> */
    public ?array $sceneIDs;

    /** @var array<string> */
    public ?array $markerIDs;

    /** @var array<string> */
    public ?array $imageIDs;

    /** @var array<string> */
    public ?array $galleryIDs;

    /** @var array<string> */
    public ?array $paths;
    public ?bool $overwrite;

    /**
     * @param array<string> $sceneIDs
     * @param array<string> $markerIDs
     * @param array<string> $imageIDs
     * @param array<string> $galleryIDs
     * @param array<string> $paths
     */
    public static function new(
        ?bool $covers = null,
        ?bool $sprites = null,
        ?bool $previews = null,
        ?bool $imagePreviews = null,
        ?GeneratePreviewOptionsInput $previewOptions = null,
        ?bool $markers = null,
        ?bool $markerImagePreviews = null,
        ?bool $markerScreenshots = null,
        ?bool $transcodes = null,
        ?bool $forceTranscodes = null,
        ?bool $phashes = null,
        ?bool $interactiveHeatmapsSpeeds = null,
        ?bool $imagePhashes = null,
        ?bool $imageThumbnails = null,
        ?bool $clipPreviews = null,
        ?array $sceneIDs = null,
        ?array $markerIDs = null,
        ?array $imageIDs = null,
        ?array $galleryIDs = null,
        ?array $paths = null,
        ?bool $overwrite = null,
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
        $self->forceTranscodes = $forceTranscodes;
        $self->phashes = $phashes;
        $self->interactiveHeatmapsSpeeds = $interactiveHeatmapsSpeeds;
        $self->imagePhashes = $imagePhashes;
        $self->imageThumbnails = $imageThumbnails;
        $self->clipPreviews = $clipPreviews;
        $self->sceneIDs = $sceneIDs;
        $self->markerIDs = $markerIDs;
        $self->imageIDs = $imageIDs;
        $self->galleryIDs = $galleryIDs;
        $self->paths = $paths;
        $self->overwrite = $overwrite;

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
            $self->previewOptions = \Aazsamir\Stasphp\Graphpql\GeneratePreviewOptionsInput::fromArray($data['previewOptions']);
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
        if (isset($data['forceTranscodes'])) {
            $self->forceTranscodes = $data['forceTranscodes'];
        }
        if (isset($data['phashes'])) {
            $self->phashes = $data['phashes'];
        }
        if (isset($data['interactiveHeatmapsSpeeds'])) {
            $self->interactiveHeatmapsSpeeds = $data['interactiveHeatmapsSpeeds'];
        }
        if (isset($data['imagePhashes'])) {
            $self->imagePhashes = $data['imagePhashes'];
        }
        if (isset($data['imageThumbnails'])) {
            $self->imageThumbnails = $data['imageThumbnails'];
        }
        if (isset($data['clipPreviews'])) {
            $self->clipPreviews = $data['clipPreviews'];
        }
        if (isset($data['sceneIDs'])) {
            $self->sceneIDs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['sceneIDs'] ?? []);
        }
        if (isset($data['markerIDs'])) {
            $self->markerIDs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['markerIDs'] ?? []);
        }
        if (isset($data['imageIDs'])) {
            $self->imageIDs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['imageIDs'] ?? []);
        }
        if (isset($data['galleryIDs'])) {
            $self->galleryIDs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['galleryIDs'] ?? []);
        }
        if (isset($data['paths'])) {
            $self->paths = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['paths'] ?? []);
        }
        if (isset($data['overwrite'])) {
            $self->overwrite = $data['overwrite'];
        }

        return $self;
    }
}
