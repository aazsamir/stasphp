<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigGeneralResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphql\StashConfig> */
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

    /** @var array<\Aazsamir\Stasphp\Graphql\StashBox> */
    public array $stashBoxes;
    public string $pythonPath;

    /** @var array<\Aazsamir\Stasphp\Graphql\PackageSource> */
    public array $scraperPackageSources;

    /** @var array<\Aazsamir\Stasphp\Graphql\PackageSource> */
    public array $pluginPackageSources;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\StashConfigSelectionSet>
     */
    public static function stashes(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::stashes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function databasePath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::databasePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function backupDirectoryPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::backupDirectoryPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function deleteTrashPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::deleteTrashPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function generatedPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::generatedPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function metadataPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::metadataPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function configFilePath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::configFilePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function scrapersPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::scrapersPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function pluginsPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::pluginsPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function cachePath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::cachePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function blobsPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::blobsPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function blobsStorage(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::blobsStorage();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function ffmpegPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::ffmpegPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function ffprobePath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::ffprobePath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function calculateMD5(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::calculateMD5();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function videoFileNamingAlgorithm(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::videoFileNamingAlgorithm();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function parallelTasks(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::parallelTasks();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewAudio(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::previewAudio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewSegments(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::previewSegments();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewSegmentDuration(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::previewSegmentDuration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewExcludeStart(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::previewExcludeStart();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewExcludeEnd(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::previewExcludeEnd();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function previewPreset(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::previewPreset();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function transcodeHardwareAcceleration(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::transcodeHardwareAcceleration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function maxTranscodeSize(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::maxTranscodeSize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function maxStreamingTranscodeSize(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::maxStreamingTranscodeSize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function transcodeInputArgs(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::transcodeInputArgs();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function transcodeOutputArgs(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::transcodeOutputArgs();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function liveTranscodeInputArgs(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::liveTranscodeInputArgs();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function liveTranscodeOutputArgs(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::liveTranscodeOutputArgs();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function drawFunscriptHeatmapRange(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::drawFunscriptHeatmapRange();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function writeImageThumbnails(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::writeImageThumbnails();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function createImageClipsFromVideos(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::createImageClipsFromVideos();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function apiKey(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::apiKey();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function username(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::username();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function password(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::password();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function maxSessionAge(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::maxSessionAge();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logFile(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::logFile();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logOut(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::logOut();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logLevel(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::logLevel();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logAccess(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::logAccess();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function logFileMaxSize(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::logFileMaxSize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function useCustomSpriteInterval(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::useCustomSpriteInterval();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function spriteInterval(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::spriteInterval();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function minimumSprites(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::minimumSprites();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function maximumSprites(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::maximumSprites();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function spriteScreenshotSize(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::spriteScreenshotSize();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function videoExtensions(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::videoExtensions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function imageExtensions(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::imageExtensions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function galleryExtensions(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::galleryExtensions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function createGalleriesFromFolders(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::createGalleriesFromFolders();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function galleryCoverRegex(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::galleryCoverRegex();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function excludes(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::excludes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function imageExcludes(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::imageExcludes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function customPerformerImageLocation(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::customPerformerImageLocation();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\StashBoxSelectionSet>
     */
    public static function stashBoxes(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::stashBoxes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<mixed>
     */
    public static function pythonPath(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::pythonPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\PackageSourceSelectionSet>
     */
    public static function scraperPackageSources(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::scraperPackageSources();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\PackageSourceSelectionSet>
     */
    public static function pluginPackageSources(): Fields\ConfigGeneralResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigGeneralResultField::pluginPackageSources();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\StashConfig> $stashes
     * @param array<string> $transcodeInputArgs
     * @param array<string> $transcodeOutputArgs
     * @param array<string> $liveTranscodeInputArgs
     * @param array<string> $liveTranscodeOutputArgs
     * @param array<string> $videoExtensions
     * @param array<string> $imageExtensions
     * @param array<string> $galleryExtensions
     * @param array<string> $excludes
     * @param array<string> $imageExcludes
     * @param array<\Aazsamir\Stasphp\Graphql\StashBox> $stashBoxes
     * @param array<\Aazsamir\Stasphp\Graphql\PackageSource> $scraperPackageSources
     * @param array<\Aazsamir\Stasphp\Graphql\PackageSource> $pluginPackageSources
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
        if (array_key_exists('stashes', $data)) {
            $self->stashes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\StashConfig::fromArray($data);
            }, $data['stashes'] ?? []);
        }
        if (array_key_exists('databasePath', $data)) {
            $self->databasePath = $data['databasePath'];
        }
        if (array_key_exists('backupDirectoryPath', $data)) {
            $self->backupDirectoryPath = $data['backupDirectoryPath'];
        }
        if (array_key_exists('deleteTrashPath', $data)) {
            $self->deleteTrashPath = $data['deleteTrashPath'];
        }
        if (array_key_exists('generatedPath', $data)) {
            $self->generatedPath = $data['generatedPath'];
        }
        if (array_key_exists('metadataPath', $data)) {
            $self->metadataPath = $data['metadataPath'];
        }
        if (array_key_exists('configFilePath', $data)) {
            $self->configFilePath = $data['configFilePath'];
        }
        if (array_key_exists('scrapersPath', $data)) {
            $self->scrapersPath = $data['scrapersPath'];
        }
        if (array_key_exists('pluginsPath', $data)) {
            $self->pluginsPath = $data['pluginsPath'];
        }
        if (array_key_exists('cachePath', $data)) {
            $self->cachePath = $data['cachePath'];
        }
        if (array_key_exists('blobsPath', $data)) {
            $self->blobsPath = $data['blobsPath'];
        }
        if (array_key_exists('blobsStorage', $data)) {
            $self->blobsStorage = \Aazsamir\Stasphp\Graphql\BlobsStorageType::from($data['blobsStorage']);
        }
        if (array_key_exists('ffmpegPath', $data)) {
            $self->ffmpegPath = $data['ffmpegPath'];
        }
        if (array_key_exists('ffprobePath', $data)) {
            $self->ffprobePath = $data['ffprobePath'];
        }
        if (array_key_exists('calculateMD5', $data)) {
            $self->calculateMD5 = $data['calculateMD5'];
        }
        if (array_key_exists('videoFileNamingAlgorithm', $data)) {
            $self->videoFileNamingAlgorithm = \Aazsamir\Stasphp\Graphql\HashAlgorithm::from($data['videoFileNamingAlgorithm']);
        }
        if (array_key_exists('parallelTasks', $data)) {
            $self->parallelTasks = $data['parallelTasks'];
        }
        if (array_key_exists('previewAudio', $data)) {
            $self->previewAudio = $data['previewAudio'];
        }
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
        if (array_key_exists('transcodeHardwareAcceleration', $data)) {
            $self->transcodeHardwareAcceleration = $data['transcodeHardwareAcceleration'];
        }
        if (array_key_exists('transcodeInputArgs', $data)) {
            $self->transcodeInputArgs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['transcodeInputArgs'] ?? []);
        }
        if (array_key_exists('transcodeOutputArgs', $data)) {
            $self->transcodeOutputArgs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['transcodeOutputArgs'] ?? []);
        }
        if (array_key_exists('liveTranscodeInputArgs', $data)) {
            $self->liveTranscodeInputArgs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['liveTranscodeInputArgs'] ?? []);
        }
        if (array_key_exists('liveTranscodeOutputArgs', $data)) {
            $self->liveTranscodeOutputArgs = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['liveTranscodeOutputArgs'] ?? []);
        }
        if (array_key_exists('drawFunscriptHeatmapRange', $data)) {
            $self->drawFunscriptHeatmapRange = $data['drawFunscriptHeatmapRange'];
        }
        if (array_key_exists('writeImageThumbnails', $data)) {
            $self->writeImageThumbnails = $data['writeImageThumbnails'];
        }
        if (array_key_exists('createImageClipsFromVideos', $data)) {
            $self->createImageClipsFromVideos = $data['createImageClipsFromVideos'];
        }
        if (array_key_exists('apiKey', $data)) {
            $self->apiKey = $data['apiKey'];
        }
        if (array_key_exists('username', $data)) {
            $self->username = $data['username'];
        }
        if (array_key_exists('password', $data)) {
            $self->password = $data['password'];
        }
        if (array_key_exists('maxSessionAge', $data)) {
            $self->maxSessionAge = $data['maxSessionAge'];
        }
        if (array_key_exists('logOut', $data)) {
            $self->logOut = $data['logOut'];
        }
        if (array_key_exists('logLevel', $data)) {
            $self->logLevel = $data['logLevel'];
        }
        if (array_key_exists('logAccess', $data)) {
            $self->logAccess = $data['logAccess'];
        }
        if (array_key_exists('logFileMaxSize', $data)) {
            $self->logFileMaxSize = $data['logFileMaxSize'];
        }
        if (array_key_exists('useCustomSpriteInterval', $data)) {
            $self->useCustomSpriteInterval = $data['useCustomSpriteInterval'];
        }
        if (array_key_exists('spriteInterval', $data)) {
            $self->spriteInterval = $data['spriteInterval'];
        }
        if (array_key_exists('minimumSprites', $data)) {
            $self->minimumSprites = $data['minimumSprites'];
        }
        if (array_key_exists('maximumSprites', $data)) {
            $self->maximumSprites = $data['maximumSprites'];
        }
        if (array_key_exists('spriteScreenshotSize', $data)) {
            $self->spriteScreenshotSize = $data['spriteScreenshotSize'];
        }
        if (array_key_exists('videoExtensions', $data)) {
            $self->videoExtensions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['videoExtensions'] ?? []);
        }
        if (array_key_exists('imageExtensions', $data)) {
            $self->imageExtensions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['imageExtensions'] ?? []);
        }
        if (array_key_exists('galleryExtensions', $data)) {
            $self->galleryExtensions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['galleryExtensions'] ?? []);
        }
        if (array_key_exists('createGalleriesFromFolders', $data)) {
            $self->createGalleriesFromFolders = $data['createGalleriesFromFolders'];
        }
        if (array_key_exists('galleryCoverRegex', $data)) {
            $self->galleryCoverRegex = $data['galleryCoverRegex'];
        }
        if (array_key_exists('excludes', $data)) {
            $self->excludes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['excludes'] ?? []);
        }
        if (array_key_exists('imageExcludes', $data)) {
            $self->imageExcludes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['imageExcludes'] ?? []);
        }
        if (array_key_exists('stashBoxes', $data)) {
            $self->stashBoxes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\StashBox::fromArray($data);
            }, $data['stashBoxes'] ?? []);
        }
        if (array_key_exists('pythonPath', $data)) {
            $self->pythonPath = $data['pythonPath'];
        }
        if (array_key_exists('scraperPackageSources', $data)) {
            $self->scraperPackageSources = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\PackageSource::fromArray($data);
            }, $data['scraperPackageSources'] ?? []);
        }
        if (array_key_exists('pluginPackageSources', $data)) {
            $self->pluginPackageSources = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\PackageSource::fromArray($data);
            }, $data['pluginPackageSources'] ?? []);
        }
        if (array_key_exists('maxTranscodeSize', $data)) {
            $self->maxTranscodeSize = \Aazsamir\Stasphp\Graphql\StreamingResolutionEnum::from($data['maxTranscodeSize']);
        }
        if (array_key_exists('maxStreamingTranscodeSize', $data)) {
            $self->maxStreamingTranscodeSize = \Aazsamir\Stasphp\Graphql\StreamingResolutionEnum::from($data['maxStreamingTranscodeSize']);
        }
        if (array_key_exists('logFile', $data)) {
            $self->logFile = $data['logFile'];
        }
        if (array_key_exists('customPerformerImageLocation', $data)) {
            $self->customPerformerImageLocation = $data['customPerformerImageLocation'];
        }

        return $self;
    }
}
