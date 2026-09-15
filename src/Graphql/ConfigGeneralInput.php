<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigGeneralInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphql\StashConfigInput> */
    public ?array $stashes;
    public ?string $databasePath;
    public ?string $backupDirectoryPath;
    public ?string $deleteTrashPath;
    public ?string $generatedPath;
    public ?string $metadataPath;
    public ?string $scrapersPath;
    public ?string $pluginsPath;
    public ?string $cachePath;
    public ?string $blobsPath;
    public ?BlobsStorageType $blobsStorage;
    public ?string $ffmpegPath;
    public ?string $ffprobePath;
    public ?bool $calculateMD5;
    public ?HashAlgorithm $videoFileNamingAlgorithm;
    public ?int $parallelTasks;
    public ?bool $previewAudio;
    public ?int $previewSegments;
    public ?float $previewSegmentDuration;
    public ?string $previewExcludeStart;
    public ?string $previewExcludeEnd;
    public ?PreviewPreset $previewPreset;
    public ?bool $transcodeHardwareAcceleration;
    public ?StreamingResolutionEnum $maxTranscodeSize;
    public ?StreamingResolutionEnum $maxStreamingTranscodeSize;

    /** @var array<string> */
    public ?array $transcodeInputArgs;

    /** @var array<string> */
    public ?array $transcodeOutputArgs;

    /** @var array<string> */
    public ?array $liveTranscodeInputArgs;

    /** @var array<string> */
    public ?array $liveTranscodeOutputArgs;
    public ?bool $drawFunscriptHeatmapRange;
    public ?bool $writeImageThumbnails;
    public ?bool $createImageClipsFromVideos;
    public ?string $username;
    public ?string $password;
    public ?int $maxSessionAge;
    public ?string $logFile;
    public ?bool $logOut;
    public ?string $logLevel;
    public ?bool $logAccess;
    public ?int $logFileMaxSize;
    public ?bool $createGalleriesFromFolders;
    public ?string $galleryCoverRegex;

    /** @var array<string> */
    public ?array $videoExtensions;

    /** @var array<string> */
    public ?array $imageExtensions;

    /** @var array<string> */
    public ?array $galleryExtensions;

    /** @var array<string> */
    public ?array $excludes;

    /** @var array<string> */
    public ?array $imageExcludes;
    public ?string $customPerformerImageLocation;

    /** @var array<\Aazsamir\Stasphp\Graphql\StashBoxInput> */
    public ?array $stashBoxes;
    public ?string $pythonPath;

    /** @var array<\Aazsamir\Stasphp\Graphql\PackageSourceInput> */
    public ?array $scraperPackageSources;

    /** @var array<\Aazsamir\Stasphp\Graphql\PackageSourceInput> */
    public ?array $pluginPackageSources;
    public ?int $spriteScreenshotSize;
    public ?bool $useCustomSpriteInterval;
    public ?float $spriteInterval;
    public ?int $minimumSprites;
    public ?int $maximumSprites;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\StashConfigInput> $stashes
     * @param array<string> $transcodeInputArgs
     * @param array<string> $transcodeOutputArgs
     * @param array<string> $liveTranscodeInputArgs
     * @param array<string> $liveTranscodeOutputArgs
     * @param array<string> $videoExtensions
     * @param array<string> $imageExtensions
     * @param array<string> $galleryExtensions
     * @param array<string> $excludes
     * @param array<string> $imageExcludes
     * @param array<\Aazsamir\Stasphp\Graphql\StashBoxInput> $stashBoxes
     * @param array<\Aazsamir\Stasphp\Graphql\PackageSourceInput> $scraperPackageSources
     * @param array<\Aazsamir\Stasphp\Graphql\PackageSourceInput> $pluginPackageSources
     */
    public static function new(
        ?array $stashes = null,
        ?string $databasePath = null,
        ?string $backupDirectoryPath = null,
        ?string $deleteTrashPath = null,
        ?string $generatedPath = null,
        ?string $metadataPath = null,
        ?string $scrapersPath = null,
        ?string $pluginsPath = null,
        ?string $cachePath = null,
        ?string $blobsPath = null,
        ?BlobsStorageType $blobsStorage = null,
        ?string $ffmpegPath = null,
        ?string $ffprobePath = null,
        ?bool $calculateMD5 = null,
        ?HashAlgorithm $videoFileNamingAlgorithm = null,
        ?int $parallelTasks = null,
        ?bool $previewAudio = null,
        ?int $previewSegments = null,
        ?float $previewSegmentDuration = null,
        ?string $previewExcludeStart = null,
        ?string $previewExcludeEnd = null,
        ?PreviewPreset $previewPreset = null,
        ?bool $transcodeHardwareAcceleration = null,
        ?StreamingResolutionEnum $maxTranscodeSize = null,
        ?StreamingResolutionEnum $maxStreamingTranscodeSize = null,
        ?array $transcodeInputArgs = null,
        ?array $transcodeOutputArgs = null,
        ?array $liveTranscodeInputArgs = null,
        ?array $liveTranscodeOutputArgs = null,
        ?bool $drawFunscriptHeatmapRange = null,
        ?bool $writeImageThumbnails = null,
        ?bool $createImageClipsFromVideos = null,
        ?string $username = null,
        ?string $password = null,
        ?int $maxSessionAge = null,
        ?string $logFile = null,
        ?bool $logOut = null,
        ?string $logLevel = null,
        ?bool $logAccess = null,
        ?int $logFileMaxSize = null,
        ?bool $createGalleriesFromFolders = null,
        ?string $galleryCoverRegex = null,
        ?array $videoExtensions = null,
        ?array $imageExtensions = null,
        ?array $galleryExtensions = null,
        ?array $excludes = null,
        ?array $imageExcludes = null,
        ?string $customPerformerImageLocation = null,
        ?array $stashBoxes = null,
        ?string $pythonPath = null,
        ?array $scraperPackageSources = null,
        ?array $pluginPackageSources = null,
        ?int $spriteScreenshotSize = null,
        ?bool $useCustomSpriteInterval = null,
        ?float $spriteInterval = null,
        ?int $minimumSprites = null,
        ?int $maximumSprites = null,
    ): self {
        $self = new self();
        $self->stashes = $stashes;
        $self->databasePath = $databasePath;
        $self->backupDirectoryPath = $backupDirectoryPath;
        $self->deleteTrashPath = $deleteTrashPath;
        $self->generatedPath = $generatedPath;
        $self->metadataPath = $metadataPath;
        $self->scrapersPath = $scrapersPath;
        $self->pluginsPath = $pluginsPath;
        $self->cachePath = $cachePath;
        $self->blobsPath = $blobsPath;
        $self->blobsStorage = $blobsStorage;
        $self->ffmpegPath = $ffmpegPath;
        $self->ffprobePath = $ffprobePath;
        $self->calculateMD5 = $calculateMD5;
        $self->videoFileNamingAlgorithm = $videoFileNamingAlgorithm;
        $self->parallelTasks = $parallelTasks;
        $self->previewAudio = $previewAudio;
        $self->previewSegments = $previewSegments;
        $self->previewSegmentDuration = $previewSegmentDuration;
        $self->previewExcludeStart = $previewExcludeStart;
        $self->previewExcludeEnd = $previewExcludeEnd;
        $self->previewPreset = $previewPreset;
        $self->transcodeHardwareAcceleration = $transcodeHardwareAcceleration;
        $self->maxTranscodeSize = $maxTranscodeSize;
        $self->maxStreamingTranscodeSize = $maxStreamingTranscodeSize;
        $self->transcodeInputArgs = $transcodeInputArgs;
        $self->transcodeOutputArgs = $transcodeOutputArgs;
        $self->liveTranscodeInputArgs = $liveTranscodeInputArgs;
        $self->liveTranscodeOutputArgs = $liveTranscodeOutputArgs;
        $self->drawFunscriptHeatmapRange = $drawFunscriptHeatmapRange;
        $self->writeImageThumbnails = $writeImageThumbnails;
        $self->createImageClipsFromVideos = $createImageClipsFromVideos;
        $self->username = $username;
        $self->password = $password;
        $self->maxSessionAge = $maxSessionAge;
        $self->logFile = $logFile;
        $self->logOut = $logOut;
        $self->logLevel = $logLevel;
        $self->logAccess = $logAccess;
        $self->logFileMaxSize = $logFileMaxSize;
        $self->createGalleriesFromFolders = $createGalleriesFromFolders;
        $self->galleryCoverRegex = $galleryCoverRegex;
        $self->videoExtensions = $videoExtensions;
        $self->imageExtensions = $imageExtensions;
        $self->galleryExtensions = $galleryExtensions;
        $self->excludes = $excludes;
        $self->imageExcludes = $imageExcludes;
        $self->customPerformerImageLocation = $customPerformerImageLocation;
        $self->stashBoxes = $stashBoxes;
        $self->pythonPath = $pythonPath;
        $self->scraperPackageSources = $scraperPackageSources;
        $self->pluginPackageSources = $pluginPackageSources;
        $self->spriteScreenshotSize = $spriteScreenshotSize;
        $self->useCustomSpriteInterval = $useCustomSpriteInterval;
        $self->spriteInterval = $spriteInterval;
        $self->minimumSprites = $minimumSprites;
        $self->maximumSprites = $maximumSprites;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['stashes'])) {
            $self->stashes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\StashConfigInput::fromArray($data);
            }, $data['stashes'] ?? []);
        }
        if (isset($data['databasePath'])) {
            $self->databasePath = $data['databasePath'];
        }
        if (isset($data['backupDirectoryPath'])) {
            $self->backupDirectoryPath = $data['backupDirectoryPath'];
        }
        if (isset($data['deleteTrashPath'])) {
            $self->deleteTrashPath = $data['deleteTrashPath'];
        }
        if (isset($data['generatedPath'])) {
            $self->generatedPath = $data['generatedPath'];
        }
        if (isset($data['metadataPath'])) {
            $self->metadataPath = $data['metadataPath'];
        }
        if (isset($data['scrapersPath'])) {
            $self->scrapersPath = $data['scrapersPath'];
        }
        if (isset($data['pluginsPath'])) {
            $self->pluginsPath = $data['pluginsPath'];
        }
        if (isset($data['cachePath'])) {
            $self->cachePath = $data['cachePath'];
        }
        if (isset($data['blobsPath'])) {
            $self->blobsPath = $data['blobsPath'];
        }
        if (isset($data['blobsStorage'])) {
            $self->blobsStorage = \Aazsamir\Stasphp\Graphql\BlobsStorageType::from($data['blobsStorage']);
        }
        if (isset($data['ffmpegPath'])) {
            $self->ffmpegPath = $data['ffmpegPath'];
        }
        if (isset($data['ffprobePath'])) {
            $self->ffprobePath = $data['ffprobePath'];
        }
        if (isset($data['calculateMD5'])) {
            $self->calculateMD5 = $data['calculateMD5'];
        }
        if (isset($data['videoFileNamingAlgorithm'])) {
            $self->videoFileNamingAlgorithm = \Aazsamir\Stasphp\Graphql\HashAlgorithm::from($data['videoFileNamingAlgorithm']);
        }
        if (isset($data['parallelTasks'])) {
            $self->parallelTasks = $data['parallelTasks'];
        }
        if (isset($data['previewAudio'])) {
            $self->previewAudio = $data['previewAudio'];
        }
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
        if (isset($data['transcodeHardwareAcceleration'])) {
            $self->transcodeHardwareAcceleration = $data['transcodeHardwareAcceleration'];
        }
        if (isset($data['maxTranscodeSize'])) {
            $self->maxTranscodeSize = \Aazsamir\Stasphp\Graphql\StreamingResolutionEnum::from($data['maxTranscodeSize']);
        }
        if (isset($data['maxStreamingTranscodeSize'])) {
            $self->maxStreamingTranscodeSize = \Aazsamir\Stasphp\Graphql\StreamingResolutionEnum::from($data['maxStreamingTranscodeSize']);
        }
        if (isset($data['transcodeInputArgs'])) {
            $self->transcodeInputArgs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['transcodeInputArgs'] ?? []);
        }
        if (isset($data['transcodeOutputArgs'])) {
            $self->transcodeOutputArgs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['transcodeOutputArgs'] ?? []);
        }
        if (isset($data['liveTranscodeInputArgs'])) {
            $self->liveTranscodeInputArgs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['liveTranscodeInputArgs'] ?? []);
        }
        if (isset($data['liveTranscodeOutputArgs'])) {
            $self->liveTranscodeOutputArgs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['liveTranscodeOutputArgs'] ?? []);
        }
        if (isset($data['drawFunscriptHeatmapRange'])) {
            $self->drawFunscriptHeatmapRange = $data['drawFunscriptHeatmapRange'];
        }
        if (isset($data['writeImageThumbnails'])) {
            $self->writeImageThumbnails = $data['writeImageThumbnails'];
        }
        if (isset($data['createImageClipsFromVideos'])) {
            $self->createImageClipsFromVideos = $data['createImageClipsFromVideos'];
        }
        if (isset($data['username'])) {
            $self->username = $data['username'];
        }
        if (isset($data['password'])) {
            $self->password = $data['password'];
        }
        if (isset($data['maxSessionAge'])) {
            $self->maxSessionAge = $data['maxSessionAge'];
        }
        if (isset($data['logFile'])) {
            $self->logFile = $data['logFile'];
        }
        if (isset($data['logOut'])) {
            $self->logOut = $data['logOut'];
        }
        if (isset($data['logLevel'])) {
            $self->logLevel = $data['logLevel'];
        }
        if (isset($data['logAccess'])) {
            $self->logAccess = $data['logAccess'];
        }
        if (isset($data['logFileMaxSize'])) {
            $self->logFileMaxSize = $data['logFileMaxSize'];
        }
        if (isset($data['createGalleriesFromFolders'])) {
            $self->createGalleriesFromFolders = $data['createGalleriesFromFolders'];
        }
        if (isset($data['galleryCoverRegex'])) {
            $self->galleryCoverRegex = $data['galleryCoverRegex'];
        }
        if (isset($data['videoExtensions'])) {
            $self->videoExtensions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['videoExtensions'] ?? []);
        }
        if (isset($data['imageExtensions'])) {
            $self->imageExtensions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['imageExtensions'] ?? []);
        }
        if (isset($data['galleryExtensions'])) {
            $self->galleryExtensions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['galleryExtensions'] ?? []);
        }
        if (isset($data['excludes'])) {
            $self->excludes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['excludes'] ?? []);
        }
        if (isset($data['imageExcludes'])) {
            $self->imageExcludes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['imageExcludes'] ?? []);
        }
        if (isset($data['customPerformerImageLocation'])) {
            $self->customPerformerImageLocation = $data['customPerformerImageLocation'];
        }
        if (isset($data['stashBoxes'])) {
            $self->stashBoxes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\StashBoxInput::fromArray($data);
            }, $data['stashBoxes'] ?? []);
        }
        if (isset($data['pythonPath'])) {
            $self->pythonPath = $data['pythonPath'];
        }
        if (isset($data['scraperPackageSources'])) {
            $self->scraperPackageSources = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\PackageSourceInput::fromArray($data);
            }, $data['scraperPackageSources'] ?? []);
        }
        if (isset($data['pluginPackageSources'])) {
            $self->pluginPackageSources = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\PackageSourceInput::fromArray($data);
            }, $data['pluginPackageSources'] ?? []);
        }
        if (isset($data['spriteScreenshotSize'])) {
            $self->spriteScreenshotSize = $data['spriteScreenshotSize'];
        }
        if (isset($data['useCustomSpriteInterval'])) {
            $self->useCustomSpriteInterval = $data['useCustomSpriteInterval'];
        }
        if (isset($data['spriteInterval'])) {
            $self->spriteInterval = $data['spriteInterval'];
        }
        if (isset($data['minimumSprites'])) {
            $self->minimumSprites = $data['minimumSprites'];
        }
        if (isset($data['maximumSprites'])) {
            $self->maximumSprites = $data['maximumSprites'];
        }

        return $self;
    }
}
