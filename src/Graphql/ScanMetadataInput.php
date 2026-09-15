<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScanMetadataInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $paths;
    public ?bool $rescan;
    public ?bool $scanGenerateCovers;
    public ?bool $scanGeneratePreviews;
    public ?bool $scanGenerateImagePreviews;
    public ?bool $scanGenerateSprites;
    public ?bool $scanGeneratePhashes;
    public ?bool $scanGenerateImagePhashes;
    public ?bool $scanGenerateThumbnails;
    public ?bool $scanGenerateClipPreviews;
    public ?ScanMetaDataFilterInput $filter;

    /**
     * @param array<string> $paths
     */
    public static function new(
        ?array $paths = null,
        ?bool $rescan = null,
        ?bool $scanGenerateCovers = null,
        ?bool $scanGeneratePreviews = null,
        ?bool $scanGenerateImagePreviews = null,
        ?bool $scanGenerateSprites = null,
        ?bool $scanGeneratePhashes = null,
        ?bool $scanGenerateImagePhashes = null,
        ?bool $scanGenerateThumbnails = null,
        ?bool $scanGenerateClipPreviews = null,
        ?ScanMetaDataFilterInput $filter = null,
    ): self {
        $self = new self();
        $self->paths = $paths;
        $self->rescan = $rescan;
        $self->scanGenerateCovers = $scanGenerateCovers;
        $self->scanGeneratePreviews = $scanGeneratePreviews;
        $self->scanGenerateImagePreviews = $scanGenerateImagePreviews;
        $self->scanGenerateSprites = $scanGenerateSprites;
        $self->scanGeneratePhashes = $scanGeneratePhashes;
        $self->scanGenerateImagePhashes = $scanGenerateImagePhashes;
        $self->scanGenerateThumbnails = $scanGenerateThumbnails;
        $self->scanGenerateClipPreviews = $scanGenerateClipPreviews;
        $self->filter = $filter;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['paths'])) {
            $self->paths = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['paths'] ?? []);
        }
        if (isset($data['rescan'])) {
            $self->rescan = $data['rescan'];
        }
        if (isset($data['scanGenerateCovers'])) {
            $self->scanGenerateCovers = $data['scanGenerateCovers'];
        }
        if (isset($data['scanGeneratePreviews'])) {
            $self->scanGeneratePreviews = $data['scanGeneratePreviews'];
        }
        if (isset($data['scanGenerateImagePreviews'])) {
            $self->scanGenerateImagePreviews = $data['scanGenerateImagePreviews'];
        }
        if (isset($data['scanGenerateSprites'])) {
            $self->scanGenerateSprites = $data['scanGenerateSprites'];
        }
        if (isset($data['scanGeneratePhashes'])) {
            $self->scanGeneratePhashes = $data['scanGeneratePhashes'];
        }
        if (isset($data['scanGenerateImagePhashes'])) {
            $self->scanGenerateImagePhashes = $data['scanGenerateImagePhashes'];
        }
        if (isset($data['scanGenerateThumbnails'])) {
            $self->scanGenerateThumbnails = $data['scanGenerateThumbnails'];
        }
        if (isset($data['scanGenerateClipPreviews'])) {
            $self->scanGenerateClipPreviews = $data['scanGenerateClipPreviews'];
        }
        if (isset($data['filter'])) {
            $self->filter = \Aazsamir\Stasphp\Graphql\ScanMetaDataFilterInput::fromArray($data['filter']);
        }

        return $self;
    }
}
