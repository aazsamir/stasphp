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
        if (array_key_exists('rescan', $data)) {
            $self->rescan = $data['rescan'];
        }
        if (array_key_exists('scanGenerateCovers', $data)) {
            $self->scanGenerateCovers = $data['scanGenerateCovers'];
        }
        if (array_key_exists('scanGeneratePreviews', $data)) {
            $self->scanGeneratePreviews = $data['scanGeneratePreviews'];
        }
        if (array_key_exists('scanGenerateImagePreviews', $data)) {
            $self->scanGenerateImagePreviews = $data['scanGenerateImagePreviews'];
        }
        if (array_key_exists('scanGenerateSprites', $data)) {
            $self->scanGenerateSprites = $data['scanGenerateSprites'];
        }
        if (array_key_exists('scanGeneratePhashes', $data)) {
            $self->scanGeneratePhashes = $data['scanGeneratePhashes'];
        }
        if (array_key_exists('scanGenerateThumbnails', $data)) {
            $self->scanGenerateThumbnails = $data['scanGenerateThumbnails'];
        }
        if (array_key_exists('scanGenerateClipPreviews', $data)) {
            $self->scanGenerateClipPreviews = $data['scanGenerateClipPreviews'];
        }
        if (array_key_exists('scanGenerateImagePhashes', $data)) {
            $self->scanGenerateImagePhashes = $data['scanGenerateImagePhashes'];
        }

        return $self;
    }
}
