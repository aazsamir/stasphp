<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ConfigGeneralResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashConfig> */
    public array $stashes;
    public string $databasePath;
    public string $backupDirectoryPath;
    public string $deleteTrashPath;
    public string $generatedPath;
    public string $metadataPath;
    public string $configFilePath;
    public string $scrapersPath;
    public string $pluginsPath;
    public string $cachePath;
    public string $blobsPath;
    public BlobsStorageType $blobsStorage;
    public string $ffmpegPath;
    public string $ffprobePath;
    public bool $calculateMD5;
    public HashAlgorithm $videoFileNamingAlgorithm;
    public int $parallelTasks;
    public bool $previewAudio;
    public int $previewSegments;
    public float $previewSegmentDuration;
    public string $previewExcludeStart;
    public string $previewExcludeEnd;
    public PreviewPreset $previewPreset;
    public bool $transcodeHardwareAcceleration;
    public ?StreamingResolutionEnum $maxTranscodeSize;
    public ?StreamingResolutionEnum $maxStreamingTranscodeSize;

    /** @var array<string> */
    public array $transcodeInputArgs;

    /** @var array<string> */
    public array $transcodeOutputArgs;

    /** @var array<string> */
    public array $liveTranscodeInputArgs;

    /** @var array<string> */
    public array $liveTranscodeOutputArgs;
    public bool $drawFunscriptHeatmapRange;
    public bool $writeImageThumbnails;
    public bool $createImageClipsFromVideos;
    public string $apiKey;
    public string $username;
    public string $password;
    public int $maxSessionAge;
    public ?string $logFile;
    public bool $logOut;
    public string $logLevel;
    public bool $logAccess;
    public int $logFileMaxSize;
    public bool $useCustomSpriteInterval;
    public float $spriteInterval;
    public int $minimumSprites;
    public int $maximumSprites;
    public int $spriteScreenshotSize;

    /** @var array<string> */
    public array $videoExtensions;

    /** @var array<string> */
    public array $imageExtensions;

    /** @var array<string> */
    public array $galleryExtensions;
    public bool $createGalleriesFromFolders;
    public string $galleryCoverRegex;

    /** @var array<string> */
    public array $excludes;

    /** @var array<string> */
    public array $imageExcludes;
    public ?string $customPerformerImageLocation;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashBox> */
    public array $stashBoxes;
    public string $pythonPath;

    /** @var array<\Aazsamir\Stasphp\Graphpql\PackageSource> */
    public array $scraperPackageSources;

    /** @var array<\Aazsamir\Stasphp\Graphpql\PackageSource> */
    public array $pluginPackageSources;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StashConfigSelectionSet>
     */
    public static function stashes(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::stashes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function databasePath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::databasePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function backupDirectoryPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::backupDirectoryPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function deleteTrashPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::deleteTrashPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function generatedPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::generatedPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function metadataPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::metadataPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function configFilePath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::configFilePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function scrapersPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::scrapersPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function pluginsPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::pluginsPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function cachePath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::cachePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function blobsPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::blobsPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function blobsStorage(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::blobsStorage();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function ffmpegPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::ffmpegPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function ffprobePath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::ffprobePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function calculateMD5(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::calculateMD5();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function videoFileNamingAlgorithm(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::videoFileNamingAlgorithm();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function parallelTasks(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::parallelTasks();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewAudio(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::previewAudio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewSegments(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::previewSegments();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewSegmentDuration(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::previewSegmentDuration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewExcludeStart(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::previewExcludeStart();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewExcludeEnd(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::previewExcludeEnd();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewPreset(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::previewPreset();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function transcodeHardwareAcceleration(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::transcodeHardwareAcceleration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function maxTranscodeSize(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::maxTranscodeSize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function maxStreamingTranscodeSize(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::maxStreamingTranscodeSize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function transcodeInputArgs(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::transcodeInputArgs();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function transcodeOutputArgs(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::transcodeOutputArgs();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function liveTranscodeInputArgs(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::liveTranscodeInputArgs();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function liveTranscodeOutputArgs(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::liveTranscodeOutputArgs();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function drawFunscriptHeatmapRange(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::drawFunscriptHeatmapRange();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function writeImageThumbnails(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::writeImageThumbnails();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function createImageClipsFromVideos(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::createImageClipsFromVideos();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function apiKey(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::apiKey();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function username(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::username();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function password(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::password();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function maxSessionAge(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::maxSessionAge();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logFile(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::logFile();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logOut(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::logOut();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logLevel(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::logLevel();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logAccess(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::logAccess();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logFileMaxSize(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::logFileMaxSize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function useCustomSpriteInterval(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::useCustomSpriteInterval();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function spriteInterval(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::spriteInterval();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function minimumSprites(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::minimumSprites();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function maximumSprites(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::maximumSprites();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function spriteScreenshotSize(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::spriteScreenshotSize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function videoExtensions(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::videoExtensions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function imageExtensions(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::imageExtensions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function galleryExtensions(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::galleryExtensions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function createGalleriesFromFolders(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::createGalleriesFromFolders();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function galleryCoverRegex(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::galleryCoverRegex();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function excludes(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::excludes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function imageExcludes(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::imageExcludes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function customPerformerImageLocation(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::customPerformerImageLocation();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StashBoxSelectionSet>
     */
    public static function stashBoxes(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::stashBoxes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function pythonPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::pythonPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\PackageSourceSelectionSet>
     */
    public static function scraperPackageSources(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::scraperPackageSources();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\PackageSourceSelectionSet>
     */
    public static function pluginPackageSources(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigGeneralResultField::pluginPackageSources();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\StashConfig> $stashes
     * @param array<string> $transcodeInputArgs
     * @param array<string> $transcodeOutputArgs
     * @param array<string> $liveTranscodeInputArgs
     * @param array<string> $liveTranscodeOutputArgs
     * @param array<string> $videoExtensions
     * @param array<string> $imageExtensions
     * @param array<string> $galleryExtensions
     * @param array<string> $excludes
     * @param array<string> $imageExcludes
     * @param array<\Aazsamir\Stasphp\Graphpql\StashBox> $stashBoxes
     * @param array<\Aazsamir\Stasphp\Graphpql\PackageSource> $scraperPackageSources
     * @param array<\Aazsamir\Stasphp\Graphpql\PackageSource> $pluginPackageSources
     */
    public static function new(
        array $stashes,
        string $databasePath,
        string $backupDirectoryPath,
        string $deleteTrashPath,
        string $generatedPath,
        string $metadataPath,
        string $configFilePath,
        string $scrapersPath,
        string $pluginsPath,
        string $cachePath,
        string $blobsPath,
        BlobsStorageType $blobsStorage,
        string $ffmpegPath,
        string $ffprobePath,
        bool $calculateMD5,
        HashAlgorithm $videoFileNamingAlgorithm,
        int $parallelTasks,
        bool $previewAudio,
        int $previewSegments,
        float $previewSegmentDuration,
        string $previewExcludeStart,
        string $previewExcludeEnd,
        PreviewPreset $previewPreset,
        bool $transcodeHardwareAcceleration,
        array $transcodeInputArgs,
        array $transcodeOutputArgs,
        array $liveTranscodeInputArgs,
        array $liveTranscodeOutputArgs,
        bool $drawFunscriptHeatmapRange,
        bool $writeImageThumbnails,
        bool $createImageClipsFromVideos,
        string $apiKey,
        string $username,
        string $password,
        int $maxSessionAge,
        bool $logOut,
        string $logLevel,
        bool $logAccess,
        int $logFileMaxSize,
        bool $useCustomSpriteInterval,
        float $spriteInterval,
        int $minimumSprites,
        int $maximumSprites,
        int $spriteScreenshotSize,
        array $videoExtensions,
        array $imageExtensions,
        array $galleryExtensions,
        bool $createGalleriesFromFolders,
        string $galleryCoverRegex,
        array $excludes,
        array $imageExcludes,
        array $stashBoxes,
        string $pythonPath,
        array $scraperPackageSources,
        array $pluginPackageSources,
        ?StreamingResolutionEnum $maxTranscodeSize = null,
        ?StreamingResolutionEnum $maxStreamingTranscodeSize = null,
        ?string $logFile = null,
        ?string $customPerformerImageLocation = null,
    ): self {
        $self = new self();
        $self->stashes = $stashes;
        $self->databasePath = $databasePath;
        $self->backupDirectoryPath = $backupDirectoryPath;
        $self->deleteTrashPath = $deleteTrashPath;
        $self->generatedPath = $generatedPath;
        $self->metadataPath = $metadataPath;
        $self->configFilePath = $configFilePath;
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
        $self->transcodeInputArgs = $transcodeInputArgs;
        $self->transcodeOutputArgs = $transcodeOutputArgs;
        $self->liveTranscodeInputArgs = $liveTranscodeInputArgs;
        $self->liveTranscodeOutputArgs = $liveTranscodeOutputArgs;
        $self->drawFunscriptHeatmapRange = $drawFunscriptHeatmapRange;
        $self->writeImageThumbnails = $writeImageThumbnails;
        $self->createImageClipsFromVideos = $createImageClipsFromVideos;
        $self->apiKey = $apiKey;
        $self->username = $username;
        $self->password = $password;
        $self->maxSessionAge = $maxSessionAge;
        $self->logOut = $logOut;
        $self->logLevel = $logLevel;
        $self->logAccess = $logAccess;
        $self->logFileMaxSize = $logFileMaxSize;
        $self->useCustomSpriteInterval = $useCustomSpriteInterval;
        $self->spriteInterval = $spriteInterval;
        $self->minimumSprites = $minimumSprites;
        $self->maximumSprites = $maximumSprites;
        $self->spriteScreenshotSize = $spriteScreenshotSize;
        $self->videoExtensions = $videoExtensions;
        $self->imageExtensions = $imageExtensions;
        $self->galleryExtensions = $galleryExtensions;
        $self->createGalleriesFromFolders = $createGalleriesFromFolders;
        $self->galleryCoverRegex = $galleryCoverRegex;
        $self->excludes = $excludes;
        $self->imageExcludes = $imageExcludes;
        $self->stashBoxes = $stashBoxes;
        $self->pythonPath = $pythonPath;
        $self->scraperPackageSources = $scraperPackageSources;
        $self->pluginPackageSources = $pluginPackageSources;
        $self->maxTranscodeSize = $maxTranscodeSize;
        $self->maxStreamingTranscodeSize = $maxStreamingTranscodeSize;
        $self->logFile = $logFile;
        $self->customPerformerImageLocation = $customPerformerImageLocation;

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

                return \Aazsamir\Stasphp\Graphpql\StashConfig::fromArray($data);
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
        if (isset($data['configFilePath'])) {
            $self->configFilePath = $data['configFilePath'];
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
            $self->blobsStorage = \Aazsamir\Stasphp\Graphpql\BlobsStorageType::from($data['blobsStorage']);
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
            $self->videoFileNamingAlgorithm = \Aazsamir\Stasphp\Graphpql\HashAlgorithm::from($data['videoFileNamingAlgorithm']);
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
            $self->previewPreset = \Aazsamir\Stasphp\Graphpql\PreviewPreset::from($data['previewPreset']);
        }
        if (isset($data['transcodeHardwareAcceleration'])) {
            $self->transcodeHardwareAcceleration = $data['transcodeHardwareAcceleration'];
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
        if (isset($data['apiKey'])) {
            $self->apiKey = $data['apiKey'];
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
        if (isset($data['spriteScreenshotSize'])) {
            $self->spriteScreenshotSize = $data['spriteScreenshotSize'];
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
        if (isset($data['createGalleriesFromFolders'])) {
            $self->createGalleriesFromFolders = $data['createGalleriesFromFolders'];
        }
        if (isset($data['galleryCoverRegex'])) {
            $self->galleryCoverRegex = $data['galleryCoverRegex'];
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
        if (isset($data['stashBoxes'])) {
            $self->stashBoxes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\StashBox::fromArray($data);
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

                return \Aazsamir\Stasphp\Graphpql\PackageSource::fromArray($data);
            }, $data['scraperPackageSources'] ?? []);
        }
        if (isset($data['pluginPackageSources'])) {
            $self->pluginPackageSources = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\PackageSource::fromArray($data);
            }, $data['pluginPackageSources'] ?? []);
        }
        if (isset($data['maxTranscodeSize'])) {
            $self->maxTranscodeSize = \Aazsamir\Stasphp\Graphpql\StreamingResolutionEnum::from($data['maxTranscodeSize']);
        }
        if (isset($data['maxStreamingTranscodeSize'])) {
            $self->maxStreamingTranscodeSize = \Aazsamir\Stasphp\Graphpql\StreamingResolutionEnum::from($data['maxStreamingTranscodeSize']);
        }
        if (isset($data['logFile'])) {
            $self->logFile = $data['logFile'];
        }
        if (isset($data['customPerformerImageLocation'])) {
            $self->customPerformerImageLocation = $data['customPerformerImageLocation'];
        }

        return $self;
    }
}
