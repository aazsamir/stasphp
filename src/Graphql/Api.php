<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Api
{
    public function __construct(
        public \Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient,
    ) {
    }

    public function findSavedFilter(string $id): Query\FindSavedFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindSavedFilter(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findSavedFilters(?FilterMode $mode = null): Query\FindSavedFilters
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindSavedFilters(
            $mode,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated default filter now stored in UI config
     */
    public function findDefaultFilter(FilterMode $mode): Query\FindDefaultFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindDefaultFilter(
            $mode,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findFile(?string $id = null, ?string $path = null): Query\FindFile
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindFile(
            $id,
            $path,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function findFiles(
        ?FileFilterType $file_filter = null,
        ?FindFilterType $filter = null,
        ?array $ids = null,
    ): Query\FindFiles {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindFiles(
            $file_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findFolder(?string $id = null, ?string $path = null): Query\FindFolder
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindFolder(
            $id,
            $path,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function findFolders(
        ?FolderFilterType $folder_filter = null,
        ?FindFilterType $filter = null,
        ?array $ids = null,
    ): Query\FindFolders {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindFolders(
            $folder_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findScene(?string $id = null, ?string $checksum = null): Query\FindScene
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindScene(
            $id,
            $checksum,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findSceneByHash(SceneHashInput $input): Query\FindSceneByHash
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindSceneByHash(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<int> $scene_ids
     * @param array<string> $ids
     */
    public function findScenes(
        ?SceneFilterType $scene_filter = null,
        ?array $scene_ids = null,
        ?array $ids = null,
        ?FindFilterType $filter = null,
    ): Query\FindScenes {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindScenes(
            $scene_filter,
            $scene_ids,
            $ids,
            $filter,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findScenesByPathRegex(?FindFilterType $filter = null): Query\FindScenesByPathRegex
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindScenesByPathRegex(
            $filter,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findDuplicateScenes(
        ?int $distance = null,
        ?float $duration_diff = null,
    ): Query\FindDuplicateScenes {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindDuplicateScenes(
            $distance,
            $duration_diff,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneStreams(?string $id = null): Query\SceneStreams
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\SceneStreams(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function parseSceneFilenames(
        SceneParserInput $config,
        ?FindFilterType $filter = null,
    ): Query\ParseSceneFilenames {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ParseSceneFilenames(
            $config,
            $filter,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function findSceneMarkers(
        ?SceneMarkerFilterType $scene_marker_filter = null,
        ?FindFilterType $filter = null,
        ?array $ids = null,
    ): Query\FindSceneMarkers {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindSceneMarkers(
            $scene_marker_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findImage(?string $id = null, ?string $checksum = null): Query\FindImage
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindImage(
            $id,
            $checksum,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<int> $image_ids
     * @param array<string> $ids
     */
    public function findImages(
        ?ImageFilterType $image_filter = null,
        ?array $image_ids = null,
        ?array $ids = null,
        ?FindFilterType $filter = null,
    ): Query\FindImages {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindImages(
            $image_filter,
            $image_ids,
            $ids,
            $filter,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findPerformer(string $id): Query\FindPerformer
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindPerformer(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<int> $performer_ids
     * @param array<string> $ids
     */
    public function findPerformers(
        ?PerformerFilterType $performer_filter = null,
        ?FindFilterType $filter = null,
        ?array $performer_ids = null,
        ?array $ids = null,
    ): Query\FindPerformers {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindPerformers(
            $performer_filter,
            $filter,
            $performer_ids,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findStudio(string $id): Query\FindStudio
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindStudio(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function findStudios(
        ?StudioFilterType $studio_filter = null,
        ?FindFilterType $filter = null,
        ?array $ids = null,
    ): Query\FindStudios {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindStudios(
            $studio_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findGroup instead
     */
    public function findMovie(string $id): Query\FindMovie
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindMovie(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     * @deprecated Use findGroups instead
     */
    public function findMovies(
        ?MovieFilterType $movie_filter = null,
        ?FindFilterType $filter = null,
        ?array $ids = null,
    ): Query\FindMovies {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindMovies(
            $movie_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findGroup(string $id): Query\FindGroup
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindGroup(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function findGroups(
        ?GroupFilterType $group_filter = null,
        ?FindFilterType $filter = null,
        ?array $ids = null,
    ): Query\FindGroups {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindGroups(
            $group_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findGallery(string $id): Query\FindGallery
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindGallery(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function findGalleries(
        ?GalleryFilterType $gallery_filter = null,
        ?FindFilterType $filter = null,
        ?array $ids = null,
    ): Query\FindGalleries {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindGalleries(
            $gallery_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findTag(string $id): Query\FindTag
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindTag(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function findTags(
        ?TagFilterType $tag_filter = null,
        ?FindFilterType $filter = null,
        ?array $ids = null,
    ): Query\FindTags {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindTags(
            $tag_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function markerWall(?string $q = null): Query\MarkerWall
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\MarkerWall(
            $q,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneWall(?string $q = null): Query\SceneWall
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\SceneWall(
            $q,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function markerStrings(?string $q = null, ?string $sort = null): Query\MarkerStrings
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\MarkerStrings(
            $q,
            $sort,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stats(): Query\Stats
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\Stats(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMarkerTags(string $scene_id): Query\SceneMarkerTags
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\SceneMarkerTags(
            $scene_id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function logs(): Query\Logs
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\Logs(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapeContentType> $types
     */
    public function listScrapers(array $types): Query\ListScrapers
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ListScrapers(
            $types,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleScene(
        ScraperSourceInput $source,
        ScrapeSingleSceneInput $input,
    ): Query\ScrapeSingleScene {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSingleScene(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeMultiScenes(
        ScraperSourceInput $source,
        ScrapeMultiScenesInput $input,
    ): Query\ScrapeMultiScenes {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeMultiScenes(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleStudio(
        ScraperSourceInput $source,
        ScrapeSingleStudioInput $input,
    ): Query\ScrapeSingleStudio {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSingleStudio(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleTag(ScraperSourceInput $source, ScrapeSingleTagInput $input): Query\ScrapeSingleTag
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSingleTag(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSinglePerformer(
        ScraperSourceInput $source,
        ScrapeSinglePerformerInput $input,
    ): Query\ScrapeSinglePerformer {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSinglePerformer(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeMultiPerformers(
        ScraperSourceInput $source,
        ScrapeMultiPerformersInput $input,
    ): Query\ScrapeMultiPerformers {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeMultiPerformers(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleGallery(
        ScraperSourceInput $source,
        ScrapeSingleGalleryInput $input,
    ): Query\ScrapeSingleGallery {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSingleGallery(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use scrapeSingleGroup instead
     */
    public function scrapeSingleMovie(
        ScraperSourceInput $source,
        ScrapeSingleMovieInput $input,
    ): Query\ScrapeSingleMovie {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSingleMovie(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleGroup(
        ScraperSourceInput $source,
        ScrapeSingleGroupInput $input,
    ): Query\ScrapeSingleGroup {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSingleGroup(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleImage(
        ScraperSourceInput $source,
        ScrapeSingleImageInput $input,
    ): Query\ScrapeSingleImage {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSingleImage(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeURL(string $url, ScrapeContentType $ty): Query\ScrapeURL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeURL(
            $url,
            $ty,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapePerformerURL(string $url): Query\ScrapePerformerURL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapePerformerURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSceneURL(string $url): Query\ScrapeSceneURL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeSceneURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeGalleryURL(string $url): Query\ScrapeGalleryURL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeGalleryURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeImageURL(string $url): Query\ScrapeImageURL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeImageURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use scrapeGroupURL instead
     */
    public function scrapeMovieURL(string $url): Query\ScrapeMovieURL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeMovieURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeGroupURL(string $url): Query\ScrapeGroupURL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ScrapeGroupURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function plugins(): Query\Plugins
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\Plugins(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function pluginTasks(): Query\PluginTasks
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\PluginTasks(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function installedPackages(PackageType $type): Query\InstalledPackages
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\InstalledPackages(
            $type,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function availablePackages(PackageType $type, string $source): Query\AvailablePackages
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AvailablePackages(
            $type,
            $source,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configuration(): Query\Configuration
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\Configuration(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function directory(?string $path = null, ?string $locale = null): Query\Directory
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\Directory(
            $path,
            $locale,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function validateStashBoxCredentials(StashBoxInput $input): Query\ValidateStashBoxCredentials
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\ValidateStashBoxCredentials(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function systemStatus(): Query\SystemStatus
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\SystemStatus(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function jobQueue(): Query\JobQueue
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\JobQueue(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findJob(FindJobInput $input): Query\FindJob
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\FindJob(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function dlnaStatus(): Query\DlnaStatus
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\DlnaStatus(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findScenes instead
     */
    public function allScenes(): Query\AllScenes
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AllScenes(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findSceneMarkers instead
     */
    public function allSceneMarkers(): Query\AllSceneMarkers
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AllSceneMarkers(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findImages instead
     */
    public function allImages(): Query\AllImages
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AllImages(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findGalleries instead
     */
    public function allGalleries(): Query\AllGalleries
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AllGalleries(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function allPerformers(): Query\AllPerformers
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AllPerformers(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findTags instead
     */
    public function allTags(): Query\AllTags
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AllTags(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findStudios instead
     */
    public function allStudios(): Query\AllStudios
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AllStudios(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findGroups instead
     */
    public function allMovies(): Query\AllMovies
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\AllMovies(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function version(): Query\Version
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\Version(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function latestversion(): Query\Latestversion
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Query\Latestversion(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function setup(SetupInput $input): Mutation\Setup
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\Setup(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function migrate(MigrateInput $input): Mutation\Migrate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\Migrate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function downloadFFMpeg(): Mutation\DownloadFFMpeg
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\DownloadFFMpeg(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneCreate(SceneCreateInput $input): Mutation\SceneCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneUpdate(SceneUpdateInput $input): Mutation\SceneUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMerge(SceneMergeInput $input): Mutation\SceneMerge
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneMerge(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkSceneUpdate(BulkSceneUpdateInput $input): Mutation\BulkSceneUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkSceneUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneDestroy(SceneDestroyInput $input): Mutation\SceneDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scenesDestroy(ScenesDestroyInput $input): Mutation\ScenesDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ScenesDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneUpdateInput> $input
     */
    public function scenesUpdate(array $input): Mutation\ScenesUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ScenesUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use sceneAddO instead
     */
    public function sceneIncrementO(string $id): Mutation\SceneIncrementO
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneIncrementO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use sceneRemoveO instead
     */
    public function sceneDecrementO(string $id): Mutation\SceneDecrementO
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneDecrementO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\DateTimeInterface> $times
     */
    public function sceneAddO(string $id, ?array $times = null): Mutation\SceneAddO
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneAddO(
            $id,
            $times,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\DateTimeInterface> $times
     */
    public function sceneDeleteO(string $id, ?array $times = null): Mutation\SceneDeleteO
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneDeleteO(
            $id,
            $times,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneResetO(string $id): Mutation\SceneResetO
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneResetO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneSaveActivity(
        string $id,
        ?float $resume_time = null,
        ?float $playDuration = null,
    ): Mutation\SceneSaveActivity {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneSaveActivity(
            $id,
            $resume_time,
            $playDuration,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneResetActivity(
        string $id,
        ?bool $reset_resume = null,
        ?bool $reset_duration = null,
    ): Mutation\SceneResetActivity {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneResetActivity(
            $id,
            $reset_resume,
            $reset_duration,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use sceneAddPlay instead
     */
    public function sceneIncrementPlayCount(string $id): Mutation\SceneIncrementPlayCount
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneIncrementPlayCount(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\DateTimeInterface> $times
     */
    public function sceneAddPlay(string $id, ?array $times = null): Mutation\SceneAddPlay
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneAddPlay(
            $id,
            $times,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\DateTimeInterface> $times
     */
    public function sceneDeletePlay(string $id, ?array $times = null): Mutation\SceneDeletePlay
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneDeletePlay(
            $id,
            $times,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneResetPlayCount(string $id): Mutation\SceneResetPlayCount
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneResetPlayCount(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneGenerateScreenshot(string $id, ?float $at = null): Mutation\SceneGenerateScreenshot
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneGenerateScreenshot(
            $id,
            $at,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMarkerCreate(SceneMarkerCreateInput $input): Mutation\SceneMarkerCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneMarkerCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMarkerUpdate(SceneMarkerUpdateInput $input): Mutation\SceneMarkerUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneMarkerUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkSceneMarkerUpdate(BulkSceneMarkerUpdateInput $input): Mutation\BulkSceneMarkerUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkSceneMarkerUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMarkerDestroy(string $id): Mutation\SceneMarkerDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneMarkerDestroy(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function sceneMarkersDestroy(array $ids): Mutation\SceneMarkersDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneMarkersDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneAssignFile(AssignSceneFileInput $input): Mutation\SceneAssignFile
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SceneAssignFile(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageUpdate(ImageUpdateInput $input): Mutation\ImageUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ImageUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkImageUpdate(BulkImageUpdateInput $input): Mutation\BulkImageUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkImageUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageDestroy(ImageDestroyInput $input): Mutation\ImageDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ImageDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imagesDestroy(ImagesDestroyInput $input): Mutation\ImagesDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ImagesDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\ImageUpdateInput> $input
     */
    public function imagesUpdate(array $input): Mutation\ImagesUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ImagesUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageIncrementO(string $id): Mutation\ImageIncrementO
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ImageIncrementO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageDecrementO(string $id): Mutation\ImageDecrementO
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ImageDecrementO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageResetO(string $id): Mutation\ImageResetO
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ImageResetO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryCreate(GalleryCreateInput $input): Mutation\GalleryCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GalleryCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryUpdate(GalleryUpdateInput $input): Mutation\GalleryUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GalleryUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkGalleryUpdate(BulkGalleryUpdateInput $input): Mutation\BulkGalleryUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkGalleryUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryDestroy(GalleryDestroyInput $input): Mutation\GalleryDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GalleryDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\GalleryUpdateInput> $input
     */
    public function galleriesUpdate(array $input): Mutation\GalleriesUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GalleriesUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function addGalleryImages(GalleryAddInput $input): Mutation\AddGalleryImages
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\AddGalleryImages(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function removeGalleryImages(GalleryRemoveInput $input): Mutation\RemoveGalleryImages
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\RemoveGalleryImages(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function setGalleryCover(GallerySetCoverInput $input): Mutation\SetGalleryCover
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SetGalleryCover(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function resetGalleryCover(GalleryResetCoverInput $input): Mutation\ResetGalleryCover
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ResetGalleryCover(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryChapterCreate(GalleryChapterCreateInput $input): Mutation\GalleryChapterCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GalleryChapterCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryChapterUpdate(GalleryChapterUpdateInput $input): Mutation\GalleryChapterUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GalleryChapterUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryChapterDestroy(string $id): Mutation\GalleryChapterDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GalleryChapterDestroy(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function performerCreate(PerformerCreateInput $input): Mutation\PerformerCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\PerformerCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function performerUpdate(PerformerUpdateInput $input): Mutation\PerformerUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\PerformerUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function performerDestroy(PerformerDestroyInput $input): Mutation\PerformerDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\PerformerDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function performersDestroy(array $ids): Mutation\PerformersDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\PerformersDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkPerformerUpdate(BulkPerformerUpdateInput $input): Mutation\BulkPerformerUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkPerformerUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function performerMerge(PerformerMergeInput $input): Mutation\PerformerMerge
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\PerformerMerge(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function studioCreate(StudioCreateInput $input): Mutation\StudioCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StudioCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function studioUpdate(StudioUpdateInput $input): Mutation\StudioUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StudioUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function studioDestroy(StudioDestroyInput $input): Mutation\StudioDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StudioDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function studiosDestroy(array $ids): Mutation\StudiosDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StudiosDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkStudioUpdate(BulkStudioUpdateInput $input): Mutation\BulkStudioUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkStudioUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use groupCreate instead
     */
    public function movieCreate(MovieCreateInput $input): Mutation\MovieCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MovieCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use groupUpdate instead
     */
    public function movieUpdate(MovieUpdateInput $input): Mutation\MovieUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MovieUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use groupDestroy instead
     */
    public function movieDestroy(MovieDestroyInput $input): Mutation\MovieDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MovieDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     * @deprecated Use groupsDestroy instead
     */
    public function moviesDestroy(array $ids): Mutation\MoviesDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MoviesDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use bulkGroupUpdate instead
     */
    public function bulkMovieUpdate(BulkMovieUpdateInput $input): Mutation\BulkMovieUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkMovieUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function groupCreate(GroupCreateInput $input): Mutation\GroupCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GroupCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function groupUpdate(GroupUpdateInput $input): Mutation\GroupUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GroupUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function groupDestroy(GroupDestroyInput $input): Mutation\GroupDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GroupDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function groupsDestroy(array $ids): Mutation\GroupsDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GroupsDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkGroupUpdate(BulkGroupUpdateInput $input): Mutation\BulkGroupUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkGroupUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function addGroupSubGroups(GroupSubGroupAddInput $input): Mutation\AddGroupSubGroups
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\AddGroupSubGroups(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function removeGroupSubGroups(GroupSubGroupRemoveInput $input): Mutation\RemoveGroupSubGroups
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\RemoveGroupSubGroups(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function reorderSubGroups(ReorderSubGroupsInput $input): Mutation\ReorderSubGroups
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ReorderSubGroups(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function tagCreate(TagCreateInput $input): Mutation\TagCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\TagCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function tagUpdate(TagUpdateInput $input): Mutation\TagUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\TagUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function tagDestroy(TagDestroyInput $input): Mutation\TagDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\TagDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function tagsDestroy(array $ids): Mutation\TagsDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\TagsDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function tagsMerge(TagsMergeInput $input): Mutation\TagsMerge
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\TagsMerge(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkTagUpdate(BulkTagUpdateInput $input): Mutation\BulkTagUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BulkTagUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function moveFiles(MoveFilesInput $input): Mutation\MoveFiles
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MoveFiles(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function deleteFiles(array $ids): Mutation\DeleteFiles
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\DeleteFiles(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function destroyFiles(array $ids): Mutation\DestroyFiles
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\DestroyFiles(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function fileSetFingerprints(FileSetFingerprintsInput $input): Mutation\FileSetFingerprints
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\FileSetFingerprints(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function revealFileInFileManager(string $id): Mutation\RevealFileInFileManager
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\RevealFileInFileManager(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function revealFolderInFileManager(string $id): Mutation\RevealFolderInFileManager
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\RevealFolderInFileManager(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function saveFilter(SaveFilterInput $input): Mutation\SaveFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SaveFilter(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function destroySavedFilter(DestroyFilterInput $input): Mutation\DestroySavedFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\DestroySavedFilter(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated now uses UI config
     */
    public function setDefaultFilter(SetDefaultFilterInput $input): Mutation\SetDefaultFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SetDefaultFilter(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureGeneral(ConfigGeneralInput $input): Mutation\ConfigureGeneral
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ConfigureGeneral(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureInterface(ConfigInterfaceInput $input): Mutation\ConfigureInterface
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ConfigureInterface(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureDLNA(ConfigDLNAInput $input): Mutation\ConfigureDLNA
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ConfigureDLNA(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureScraping(ConfigScrapingInput $input): Mutation\ConfigureScraping
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ConfigureScraping(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureDefaults(ConfigDefaultSettingsInput $input): Mutation\ConfigureDefaults
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ConfigureDefaults(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configurePlugin(string $plugin_id, mixed $input): Mutation\ConfigurePlugin
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ConfigurePlugin(
            $plugin_id,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureUI(mixed $input = null, mixed $partial = null): Mutation\ConfigureUI
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ConfigureUI(
            $input,
            $partial,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureUISetting(string $key, mixed $value = null): Mutation\ConfigureUISetting
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ConfigureUISetting(
            $key,
            $value,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function generateAPIKey(GenerateAPIKeyInput $input): Mutation\GenerateAPIKey
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\GenerateAPIKey(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function exportObjects(ExportObjectsInput $input): Mutation\ExportObjects
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ExportObjects(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function importObjects(ImportObjectsInput $input): Mutation\ImportObjects
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ImportObjects(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataImport(): Mutation\MetadataImport
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MetadataImport(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataExport(): Mutation\MetadataExport
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MetadataExport(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataScan(ScanMetadataInput $input): Mutation\MetadataScan
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MetadataScan(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataGenerate(GenerateMetadataInput $input): Mutation\MetadataGenerate
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MetadataGenerate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataAutoTag(AutoTagMetadataInput $input): Mutation\MetadataAutoTag
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MetadataAutoTag(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataClean(CleanMetadataInput $input): Mutation\MetadataClean
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MetadataClean(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataCleanGenerated(CleanGeneratedInput $input): Mutation\MetadataCleanGenerated
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MetadataCleanGenerated(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataIdentify(IdentifyMetadataInput $input): Mutation\MetadataIdentify
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MetadataIdentify(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function migrateHashNaming(): Mutation\MigrateHashNaming
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MigrateHashNaming(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function migrateSceneScreenshots(MigrateSceneScreenshotsInput $input): Mutation\MigrateSceneScreenshots
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MigrateSceneScreenshots(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function migrateBlobs(MigrateBlobsInput $input): Mutation\MigrateBlobs
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\MigrateBlobs(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function anonymiseDatabase(AnonymiseDatabaseInput $input): Mutation\AnonymiseDatabase
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\AnonymiseDatabase(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function optimiseDatabase(): Mutation\OptimiseDatabase
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\OptimiseDatabase(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function reloadScrapers(): Mutation\ReloadScrapers
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ReloadScrapers(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function setPluginsEnabled(mixed $enabledMap): Mutation\SetPluginsEnabled
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SetPluginsEnabled(
            $enabledMap,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\PluginArgInput> $args
     */
    public function runPluginTask(
        string $plugin_id,
        ?string $task_name = null,
        ?string $description = null,
        ?array $args = null,
        mixed $args_map = null,
    ): Mutation\RunPluginTask {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\RunPluginTask(
            $plugin_id,
            $task_name,
            $description,
            $args,
            $args_map,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function runPluginOperation(string $plugin_id, mixed $args = null): Mutation\RunPluginOperation
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\RunPluginOperation(
            $plugin_id,
            $args,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function reloadPlugins(): Mutation\ReloadPlugins
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ReloadPlugins(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\PackageSpecInput> $packages
     */
    public function installPackages(PackageType $type, array $packages): Mutation\InstallPackages
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\InstallPackages(
            $type,
            $packages,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\PackageSpecInput> $packages
     */
    public function updatePackages(PackageType $type, ?array $packages = null): Mutation\UpdatePackages
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\UpdatePackages(
            $type,
            $packages,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\PackageSpecInput> $packages
     */
    public function uninstallPackages(PackageType $type, array $packages): Mutation\UninstallPackages
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\UninstallPackages(
            $type,
            $packages,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stopJob(string $job_id): Mutation\StopJob
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StopJob(
            $job_id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stopAllJobs(): Mutation\StopAllJobs
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StopAllJobs(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function submitStashBoxFingerprints(
        StashBoxFingerprintSubmissionInput $input,
    ): Mutation\SubmitStashBoxFingerprints {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SubmitStashBoxFingerprints(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function submitStashBoxSceneDraft(StashBoxDraftSubmissionInput $input): Mutation\SubmitStashBoxSceneDraft
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SubmitStashBoxSceneDraft(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function submitStashBoxPerformerDraft(
        StashBoxDraftSubmissionInput $input,
    ): Mutation\SubmitStashBoxPerformerDraft {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\SubmitStashBoxPerformerDraft(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function backupDatabase(BackupDatabaseInput $input): Mutation\BackupDatabase
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\BackupDatabase(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<mixed> $args
     */
    public function querySQL(string $sql, ?array $args = null): Mutation\QuerySQL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\QuerySQL(
            $sql,
            $args,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<mixed> $args
     */
    public function execSQL(string $sql, ?array $args = null): Mutation\ExecSQL
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\ExecSQL(
            $sql,
            $args,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stashBoxBatchPerformerTag(StashBoxBatchTagInput $input): Mutation\StashBoxBatchPerformerTag
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StashBoxBatchPerformerTag(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stashBoxBatchStudioTag(StashBoxBatchTagInput $input): Mutation\StashBoxBatchStudioTag
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StashBoxBatchStudioTag(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stashBoxBatchTagTag(StashBoxBatchTagInput $input): Mutation\StashBoxBatchTagTag
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\StashBoxBatchTagTag(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function enableDLNA(EnableDLNAInput $input): Mutation\EnableDLNA
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\EnableDLNA(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function disableDLNA(DisableDLNAInput $input): Mutation\DisableDLNA
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\DisableDLNA(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function addTempDLNAIP(AddTempDLNAIPInput $input): Mutation\AddTempDLNAIP
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\AddTempDLNAIP(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function removeTempDLNAIP(RemoveTempDLNAIPInput $input): Mutation\RemoveTempDLNAIP
    {
        $operation = new \Aazsamir\Stasphp\Graphpql\Mutation\RemoveTempDLNAIP(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }
}
