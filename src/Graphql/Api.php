<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Api
{
    public function __construct(
        public \Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient,
    ) {
    }

    public function findSavedFilter(string $id): Query\FindSavedFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindSavedFilter(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findSavedFilters(?FilterMode $mode = null): Query\FindSavedFilters
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindSavedFilters(
            $mode,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated default filter now stored in UI config
     */
    public function findDefaultFilter(FilterMode $mode): Query\FindDefaultFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindDefaultFilter(
            $mode,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findFile(?string $id = null, ?string $path = null): Query\FindFile
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindFile(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindFiles(
            $file_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findFolder(?string $id = null, ?string $path = null): Query\FindFolder
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindFolder(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindFolders(
            $folder_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findScene(?string $id = null, ?string $checksum = null): Query\FindScene
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindScene(
            $id,
            $checksum,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findSceneByHash(SceneHashInput $input): Query\FindSceneByHash
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindSceneByHash(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindScenes(
            $scene_filter,
            $scene_ids,
            $ids,
            $filter,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findScenesByPathRegex(?FindFilterType $filter = null): Query\FindScenesByPathRegex
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindScenesByPathRegex(
            $filter,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findDuplicateScenes(
        ?int $distance = null,
        ?float $duration_diff = null,
    ): Query\FindDuplicateScenes {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindDuplicateScenes(
            $distance,
            $duration_diff,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneStreams(?string $id = null): Query\SceneStreams
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\SceneStreams(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function parseSceneFilenames(
        SceneParserInput $config,
        ?FindFilterType $filter = null,
    ): Query\ParseSceneFilenames {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ParseSceneFilenames(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindSceneMarkers(
            $scene_marker_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findImage(?string $id = null, ?string $checksum = null): Query\FindImage
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindImage(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindImages(
            $image_filter,
            $image_ids,
            $ids,
            $filter,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findPerformer(string $id): Query\FindPerformer
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindPerformer(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindPerformers(
            $performer_filter,
            $filter,
            $performer_ids,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findStudio(string $id): Query\FindStudio
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindStudio(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindStudios(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindMovie(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindMovies(
            $movie_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findGroup(string $id): Query\FindGroup
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindGroup(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindGroups(
            $group_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findGallery(string $id): Query\FindGallery
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindGallery(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindGalleries(
            $gallery_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findTag(string $id): Query\FindTag
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindTag(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindTags(
            $tag_filter,
            $filter,
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function markerWall(?string $q = null): Query\MarkerWall
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\MarkerWall(
            $q,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneWall(?string $q = null): Query\SceneWall
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\SceneWall(
            $q,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function markerStrings(?string $q = null, ?string $sort = null): Query\MarkerStrings
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\MarkerStrings(
            $q,
            $sort,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stats(): Query\Stats
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\Stats(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMarkerTags(string $scene_id): Query\SceneMarkerTags
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\SceneMarkerTags(
            $scene_id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function logs(): Query\Logs
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\Logs(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapeContentType> $types
     */
    public function listScrapers(array $types): Query\ListScrapers
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ListScrapers(
            $types,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleScene(
        ScraperSourceInput $source,
        ScrapeSingleSceneInput $input,
    ): Query\ScrapeSingleScene {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSingleScene(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeMultiScenes(
        ScraperSourceInput $source,
        ScrapeMultiScenesInput $input,
    ): Query\ScrapeMultiScenes {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeMultiScenes(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleStudio(
        ScraperSourceInput $source,
        ScrapeSingleStudioInput $input,
    ): Query\ScrapeSingleStudio {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSingleStudio(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleTag(ScraperSourceInput $source, ScrapeSingleTagInput $input): Query\ScrapeSingleTag
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSingleTag(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSinglePerformer(
        ScraperSourceInput $source,
        ScrapeSinglePerformerInput $input,
    ): Query\ScrapeSinglePerformer {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSinglePerformer(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeMultiPerformers(
        ScraperSourceInput $source,
        ScrapeMultiPerformersInput $input,
    ): Query\ScrapeMultiPerformers {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeMultiPerformers(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleGallery(
        ScraperSourceInput $source,
        ScrapeSingleGalleryInput $input,
    ): Query\ScrapeSingleGallery {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSingleGallery(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSingleMovie(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleGroup(
        ScraperSourceInput $source,
        ScrapeSingleGroupInput $input,
    ): Query\ScrapeSingleGroup {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSingleGroup(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSingleImage(
        ScraperSourceInput $source,
        ScrapeSingleImageInput $input,
    ): Query\ScrapeSingleImage {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSingleImage(
            $source,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeURL(string $url, ScrapeContentType $ty): Query\ScrapeURL
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeURL(
            $url,
            $ty,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapePerformerURL(string $url): Query\ScrapePerformerURL
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapePerformerURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeSceneURL(string $url): Query\ScrapeSceneURL
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeSceneURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeGalleryURL(string $url): Query\ScrapeGalleryURL
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeGalleryURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeImageURL(string $url): Query\ScrapeImageURL
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeImageURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use scrapeGroupURL instead
     */
    public function scrapeMovieURL(string $url): Query\ScrapeMovieURL
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeMovieURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scrapeGroupURL(string $url): Query\ScrapeGroupURL
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ScrapeGroupURL(
            $url,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function plugins(): Query\Plugins
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\Plugins(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function pluginTasks(): Query\PluginTasks
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\PluginTasks(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function installedPackages(PackageType $type): Query\InstalledPackages
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\InstalledPackages(
            $type,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function availablePackages(PackageType $type, string $source): Query\AvailablePackages
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AvailablePackages(
            $type,
            $source,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configuration(): Query\Configuration
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\Configuration(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function directory(?string $path = null, ?string $locale = null): Query\Directory
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\Directory(
            $path,
            $locale,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function validateStashBoxCredentials(StashBoxInput $input): Query\ValidateStashBoxCredentials
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\ValidateStashBoxCredentials(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function systemStatus(): Query\SystemStatus
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\SystemStatus(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function jobQueue(): Query\JobQueue
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\JobQueue(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function findJob(FindJobInput $input): Query\FindJob
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\FindJob(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function dlnaStatus(): Query\DlnaStatus
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\DlnaStatus(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findScenes instead
     */
    public function allScenes(): Query\AllScenes
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AllScenes(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findSceneMarkers instead
     */
    public function allSceneMarkers(): Query\AllSceneMarkers
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AllSceneMarkers(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findImages instead
     */
    public function allImages(): Query\AllImages
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AllImages(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findGalleries instead
     */
    public function allGalleries(): Query\AllGalleries
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AllGalleries(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function allPerformers(): Query\AllPerformers
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AllPerformers(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findTags instead
     */
    public function allTags(): Query\AllTags
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AllTags(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findStudios instead
     */
    public function allStudios(): Query\AllStudios
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AllStudios(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use findGroups instead
     */
    public function allMovies(): Query\AllMovies
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\AllMovies(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function version(): Query\Version
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\Version(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function latestversion(): Query\Latestversion
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Query\Latestversion(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function setup(SetupInput $input): Mutation\Setup
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\Setup(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function migrate(MigrateInput $input): Mutation\Migrate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\Migrate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function downloadFFMpeg(): Mutation\DownloadFFMpeg
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\DownloadFFMpeg(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneCreate(SceneCreateInput $input): Mutation\SceneCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneUpdate(SceneUpdateInput $input): Mutation\SceneUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMerge(SceneMergeInput $input): Mutation\SceneMerge
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneMerge(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkSceneUpdate(BulkSceneUpdateInput $input): Mutation\BulkSceneUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkSceneUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneDestroy(SceneDestroyInput $input): Mutation\SceneDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function scenesDestroy(ScenesDestroyInput $input): Mutation\ScenesDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ScenesDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\SceneUpdateInput> $input
     */
    public function scenesUpdate(array $input): Mutation\ScenesUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ScenesUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use sceneAddO instead
     */
    public function sceneIncrementO(string $id): Mutation\SceneIncrementO
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneIncrementO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use sceneRemoveO instead
     */
    public function sceneDecrementO(string $id): Mutation\SceneDecrementO
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneDecrementO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\DateTimeInterface> $times
     */
    public function sceneAddO(string $id, ?array $times = null): Mutation\SceneAddO
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneAddO(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneDeleteO(
            $id,
            $times,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneResetO(string $id): Mutation\SceneResetO
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneResetO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneSaveActivity(
        string $id,
        ?float $resume_time = null,
        ?float $playDuration = null,
    ): Mutation\SceneSaveActivity {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneSaveActivity(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneResetActivity(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneIncrementPlayCount(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\DateTimeInterface> $times
     */
    public function sceneAddPlay(string $id, ?array $times = null): Mutation\SceneAddPlay
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneAddPlay(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneDeletePlay(
            $id,
            $times,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneResetPlayCount(string $id): Mutation\SceneResetPlayCount
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneResetPlayCount(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneGenerateScreenshot(string $id, ?float $at = null): Mutation\SceneGenerateScreenshot
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneGenerateScreenshot(
            $id,
            $at,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMarkerCreate(SceneMarkerCreateInput $input): Mutation\SceneMarkerCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneMarkerCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMarkerUpdate(SceneMarkerUpdateInput $input): Mutation\SceneMarkerUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneMarkerUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkSceneMarkerUpdate(BulkSceneMarkerUpdateInput $input): Mutation\BulkSceneMarkerUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkSceneMarkerUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneMarkerDestroy(string $id): Mutation\SceneMarkerDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneMarkerDestroy(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function sceneMarkersDestroy(array $ids): Mutation\SceneMarkersDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneMarkersDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function sceneAssignFile(AssignSceneFileInput $input): Mutation\SceneAssignFile
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SceneAssignFile(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageUpdate(ImageUpdateInput $input): Mutation\ImageUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ImageUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkImageUpdate(BulkImageUpdateInput $input): Mutation\BulkImageUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkImageUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageDestroy(ImageDestroyInput $input): Mutation\ImageDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ImageDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imagesDestroy(ImagesDestroyInput $input): Mutation\ImagesDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ImagesDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\ImageUpdateInput> $input
     */
    public function imagesUpdate(array $input): Mutation\ImagesUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ImagesUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageIncrementO(string $id): Mutation\ImageIncrementO
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ImageIncrementO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageDecrementO(string $id): Mutation\ImageDecrementO
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ImageDecrementO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function imageResetO(string $id): Mutation\ImageResetO
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ImageResetO(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryCreate(GalleryCreateInput $input): Mutation\GalleryCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GalleryCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryUpdate(GalleryUpdateInput $input): Mutation\GalleryUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GalleryUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkGalleryUpdate(BulkGalleryUpdateInput $input): Mutation\BulkGalleryUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkGalleryUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryDestroy(GalleryDestroyInput $input): Mutation\GalleryDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GalleryDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\GalleryUpdateInput> $input
     */
    public function galleriesUpdate(array $input): Mutation\GalleriesUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GalleriesUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function addGalleryImages(GalleryAddInput $input): Mutation\AddGalleryImages
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\AddGalleryImages(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function removeGalleryImages(GalleryRemoveInput $input): Mutation\RemoveGalleryImages
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\RemoveGalleryImages(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function setGalleryCover(GallerySetCoverInput $input): Mutation\SetGalleryCover
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SetGalleryCover(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function resetGalleryCover(GalleryResetCoverInput $input): Mutation\ResetGalleryCover
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ResetGalleryCover(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryChapterCreate(GalleryChapterCreateInput $input): Mutation\GalleryChapterCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GalleryChapterCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryChapterUpdate(GalleryChapterUpdateInput $input): Mutation\GalleryChapterUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GalleryChapterUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function galleryChapterDestroy(string $id): Mutation\GalleryChapterDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GalleryChapterDestroy(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function performerCreate(PerformerCreateInput $input): Mutation\PerformerCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\PerformerCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function performerUpdate(PerformerUpdateInput $input): Mutation\PerformerUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\PerformerUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function performerDestroy(PerformerDestroyInput $input): Mutation\PerformerDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\PerformerDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function performersDestroy(array $ids): Mutation\PerformersDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\PerformersDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkPerformerUpdate(BulkPerformerUpdateInput $input): Mutation\BulkPerformerUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkPerformerUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function performerMerge(PerformerMergeInput $input): Mutation\PerformerMerge
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\PerformerMerge(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function studioCreate(StudioCreateInput $input): Mutation\StudioCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StudioCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function studioUpdate(StudioUpdateInput $input): Mutation\StudioUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StudioUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function studioDestroy(StudioDestroyInput $input): Mutation\StudioDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StudioDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function studiosDestroy(array $ids): Mutation\StudiosDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StudiosDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkStudioUpdate(BulkStudioUpdateInput $input): Mutation\BulkStudioUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkStudioUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use groupCreate instead
     */
    public function movieCreate(MovieCreateInput $input): Mutation\MovieCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MovieCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use groupUpdate instead
     */
    public function movieUpdate(MovieUpdateInput $input): Mutation\MovieUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MovieUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use groupDestroy instead
     */
    public function movieDestroy(MovieDestroyInput $input): Mutation\MovieDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MovieDestroy(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MoviesDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated Use bulkGroupUpdate instead
     */
    public function bulkMovieUpdate(BulkMovieUpdateInput $input): Mutation\BulkMovieUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkMovieUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function groupCreate(GroupCreateInput $input): Mutation\GroupCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GroupCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function groupUpdate(GroupUpdateInput $input): Mutation\GroupUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GroupUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function groupDestroy(GroupDestroyInput $input): Mutation\GroupDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GroupDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function groupsDestroy(array $ids): Mutation\GroupsDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GroupsDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkGroupUpdate(BulkGroupUpdateInput $input): Mutation\BulkGroupUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkGroupUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function addGroupSubGroups(GroupSubGroupAddInput $input): Mutation\AddGroupSubGroups
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\AddGroupSubGroups(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function removeGroupSubGroups(GroupSubGroupRemoveInput $input): Mutation\RemoveGroupSubGroups
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\RemoveGroupSubGroups(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function reorderSubGroups(ReorderSubGroupsInput $input): Mutation\ReorderSubGroups
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ReorderSubGroups(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function tagCreate(TagCreateInput $input): Mutation\TagCreate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\TagCreate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function tagUpdate(TagUpdateInput $input): Mutation\TagUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\TagUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function tagDestroy(TagDestroyInput $input): Mutation\TagDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\TagDestroy(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function tagsDestroy(array $ids): Mutation\TagsDestroy
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\TagsDestroy(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function tagsMerge(TagsMergeInput $input): Mutation\TagsMerge
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\TagsMerge(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function bulkTagUpdate(BulkTagUpdateInput $input): Mutation\BulkTagUpdate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BulkTagUpdate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function moveFiles(MoveFilesInput $input): Mutation\MoveFiles
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MoveFiles(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function deleteFiles(array $ids): Mutation\DeleteFiles
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\DeleteFiles(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<string> $ids
     */
    public function destroyFiles(array $ids): Mutation\DestroyFiles
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\DestroyFiles(
            $ids,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function fileSetFingerprints(FileSetFingerprintsInput $input): Mutation\FileSetFingerprints
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\FileSetFingerprints(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function revealFileInFileManager(string $id): Mutation\RevealFileInFileManager
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\RevealFileInFileManager(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function revealFolderInFileManager(string $id): Mutation\RevealFolderInFileManager
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\RevealFolderInFileManager(
            $id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function saveFilter(SaveFilterInput $input): Mutation\SaveFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SaveFilter(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function destroySavedFilter(DestroyFilterInput $input): Mutation\DestroySavedFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\DestroySavedFilter(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @deprecated now uses UI config
     */
    public function setDefaultFilter(SetDefaultFilterInput $input): Mutation\SetDefaultFilter
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SetDefaultFilter(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureGeneral(ConfigGeneralInput $input): Mutation\ConfigureGeneral
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ConfigureGeneral(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureInterface(ConfigInterfaceInput $input): Mutation\ConfigureInterface
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ConfigureInterface(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureDLNA(ConfigDLNAInput $input): Mutation\ConfigureDLNA
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ConfigureDLNA(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureScraping(ConfigScrapingInput $input): Mutation\ConfigureScraping
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ConfigureScraping(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureDefaults(ConfigDefaultSettingsInput $input): Mutation\ConfigureDefaults
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ConfigureDefaults(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configurePlugin(string $plugin_id, mixed $input): Mutation\ConfigurePlugin
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ConfigurePlugin(
            $plugin_id,
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureUI(mixed $input = null, mixed $partial = null): Mutation\ConfigureUI
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ConfigureUI(
            $input,
            $partial,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function configureUISetting(string $key, mixed $value = null): Mutation\ConfigureUISetting
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ConfigureUISetting(
            $key,
            $value,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function generateAPIKey(GenerateAPIKeyInput $input): Mutation\GenerateAPIKey
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\GenerateAPIKey(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function exportObjects(ExportObjectsInput $input): Mutation\ExportObjects
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ExportObjects(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function importObjects(ImportObjectsInput $input): Mutation\ImportObjects
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ImportObjects(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataImport(): Mutation\MetadataImport
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MetadataImport(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataExport(): Mutation\MetadataExport
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MetadataExport(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataScan(ScanMetadataInput $input): Mutation\MetadataScan
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MetadataScan(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataGenerate(GenerateMetadataInput $input): Mutation\MetadataGenerate
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MetadataGenerate(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataAutoTag(AutoTagMetadataInput $input): Mutation\MetadataAutoTag
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MetadataAutoTag(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataClean(CleanMetadataInput $input): Mutation\MetadataClean
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MetadataClean(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataCleanGenerated(CleanGeneratedInput $input): Mutation\MetadataCleanGenerated
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MetadataCleanGenerated(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function metadataIdentify(IdentifyMetadataInput $input): Mutation\MetadataIdentify
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MetadataIdentify(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function migrateHashNaming(): Mutation\MigrateHashNaming
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MigrateHashNaming(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function migrateSceneScreenshots(MigrateSceneScreenshotsInput $input): Mutation\MigrateSceneScreenshots
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MigrateSceneScreenshots(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function migrateBlobs(MigrateBlobsInput $input): Mutation\MigrateBlobs
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\MigrateBlobs(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function anonymiseDatabase(AnonymiseDatabaseInput $input): Mutation\AnonymiseDatabase
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\AnonymiseDatabase(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function optimiseDatabase(): Mutation\OptimiseDatabase
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\OptimiseDatabase(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function reloadScrapers(): Mutation\ReloadScrapers
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ReloadScrapers(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function setPluginsEnabled(mixed $enabledMap): Mutation\SetPluginsEnabled
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SetPluginsEnabled(
            $enabledMap,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\PluginArgInput> $args
     */
    public function runPluginTask(
        string $plugin_id,
        ?string $task_name = null,
        ?string $description = null,
        ?array $args = null,
        mixed $args_map = null,
    ): Mutation\RunPluginTask {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\RunPluginTask(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\RunPluginOperation(
            $plugin_id,
            $args,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function reloadPlugins(): Mutation\ReloadPlugins
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ReloadPlugins(
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\PackageSpecInput> $packages
     */
    public function installPackages(PackageType $type, array $packages): Mutation\InstallPackages
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\InstallPackages(
            $type,
            $packages,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\PackageSpecInput> $packages
     */
    public function updatePackages(PackageType $type, ?array $packages = null): Mutation\UpdatePackages
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\UpdatePackages(
            $type,
            $packages,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\PackageSpecInput> $packages
     */
    public function uninstallPackages(PackageType $type, array $packages): Mutation\UninstallPackages
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\UninstallPackages(
            $type,
            $packages,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stopJob(string $job_id): Mutation\StopJob
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StopJob(
            $job_id,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stopAllJobs(): Mutation\StopAllJobs
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StopAllJobs(
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function submitStashBoxFingerprints(
        StashBoxFingerprintSubmissionInput $input,
    ): Mutation\SubmitStashBoxFingerprints {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SubmitStashBoxFingerprints(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function submitStashBoxSceneDraft(StashBoxDraftSubmissionInput $input): Mutation\SubmitStashBoxSceneDraft
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SubmitStashBoxSceneDraft(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function submitStashBoxPerformerDraft(
        StashBoxDraftSubmissionInput $input,
    ): Mutation\SubmitStashBoxPerformerDraft {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\SubmitStashBoxPerformerDraft(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function backupDatabase(BackupDatabaseInput $input): Mutation\BackupDatabase
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\BackupDatabase(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    /**
     * @param array<mixed> $args
     */
    public function querySQL(string $sql, ?array $args = null): Mutation\QuerySQL
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\QuerySQL(
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
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\ExecSQL(
            $sql,
            $args,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stashBoxBatchPerformerTag(StashBoxBatchTagInput $input): Mutation\StashBoxBatchPerformerTag
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StashBoxBatchPerformerTag(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stashBoxBatchStudioTag(StashBoxBatchTagInput $input): Mutation\StashBoxBatchStudioTag
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StashBoxBatchStudioTag(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function stashBoxBatchTagTag(StashBoxBatchTagInput $input): Mutation\StashBoxBatchTagTag
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\StashBoxBatchTagTag(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function enableDLNA(EnableDLNAInput $input): Mutation\EnableDLNA
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\EnableDLNA(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function disableDLNA(DisableDLNAInput $input): Mutation\DisableDLNA
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\DisableDLNA(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function addTempDLNAIP(AddTempDLNAIPInput $input): Mutation\AddTempDLNAIP
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\AddTempDLNAIP(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }

    public function removeTempDLNAIP(RemoveTempDLNAIPInput $input): Mutation\RemoveTempDLNAIP
    {
        $operation = new \Aazsamir\Stasphp\Graphql\Mutation\RemoveTempDLNAIP(
            $input,
        );

        return $operation->withClient($this->graphqlClient);
    }
}
