<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScanMetadataOptions implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public bool $rescan;
    public bool $scanGenerateCovers;
    public bool $scanGeneratePreviews;
    public bool $scanGenerateImagePreviews;
    public bool $scanGenerateSprites;
    public bool $scanGeneratePhashes;
    public ?bool $scanGenerateImagePhashes;
    public bool $scanGenerateThumbnails;
    public bool $scanGenerateClipPreviews;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function rescan(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::rescan();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function scanGenerateCovers(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::scanGenerateCovers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function scanGeneratePreviews(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::scanGeneratePreviews();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function scanGenerateImagePreviews(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::scanGenerateImagePreviews();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function scanGenerateSprites(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::scanGenerateSprites();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function scanGeneratePhashes(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::scanGeneratePhashes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function scanGenerateImagePhashes(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::scanGenerateImagePhashes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function scanGenerateThumbnails(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::scanGenerateThumbnails();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField<mixed>
     */
    public static function scanGenerateClipPreviews(): Fields\ScanMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScanMetadataOptionsField::scanGenerateClipPreviews();
    }

    public static function new(
        bool $rescan,
        bool $scanGenerateCovers,
        bool $scanGeneratePreviews,
        bool $scanGenerateImagePreviews,
        bool $scanGenerateSprites,
        bool $scanGeneratePhashes,
        bool $scanGenerateThumbnails,
        bool $scanGenerateClipPreviews,
        ?bool $scanGenerateImagePhashes = null,
    ): self {
        $self = new self();
        $self->rescan = $rescan;
        $self->scanGenerateCovers = $scanGenerateCovers;
        $self->scanGeneratePreviews = $scanGeneratePreviews;
        $self->scanGenerateImagePreviews = $scanGenerateImagePreviews;
        $self->scanGenerateSprites = $scanGenerateSprites;
        $self->scanGeneratePhashes = $scanGeneratePhashes;
        $self->scanGenerateThumbnails = $scanGenerateThumbnails;
        $self->scanGenerateClipPreviews = $scanGenerateClipPreviews;
        $self->scanGenerateImagePhashes = $scanGenerateImagePhashes;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
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
        if (isset($data['scanGenerateThumbnails'])) {
            $self->scanGenerateThumbnails = $data['scanGenerateThumbnails'];
        }
        if (isset($data['scanGenerateClipPreviews'])) {
            $self->scanGenerateClipPreviews = $data['scanGenerateClipPreviews'];
        }
        if (isset($data['scanGenerateImagePhashes'])) {
            $self->scanGenerateImagePhashes = $data['scanGenerateImagePhashes'];
        }

        return $self;
    }
}
