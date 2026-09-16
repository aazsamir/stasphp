<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?SceneFilterType $AND;
    public ?SceneFilterType $OR;
    public ?SceneFilterType $NOT;
    public ?IntCriterionInput $id;
    public ?StringCriterionInput $title;
    public ?StringCriterionInput $code;
    public ?StringCriterionInput $details;
    public ?StringCriterionInput $director;
    public ?StringCriterionInput $oshash;
    public ?StringCriterionInput $checksum;
    public ?StringCriterionInput $phash;
    public ?PhashDistanceCriterionInput $phash_distance;
    public ?StringCriterionInput $path;
    public ?IntCriterionInput $file_count;
    public ?IntCriterionInput $rating100;
    public ?bool $organized;
    public ?IntCriterionInput $o_counter;
    public ?DuplicationCriterionInput $duplicated;
    public ?ResolutionCriterionInput $resolution;
    public ?OrientationCriterionInput $orientation;
    public ?IntCriterionInput $framerate;
    public ?IntCriterionInput $bitrate;
    public ?StringCriterionInput $video_codec;
    public ?StringCriterionInput $audio_codec;
    public ?IntCriterionInput $duration;
    public ?string $has_markers;
    public ?string $is_missing;
    public ?HierarchicalMultiCriterionInput $studios;
    public ?MultiCriterionInput $movies;
    public ?HierarchicalMultiCriterionInput $groups;
    public ?MultiCriterionInput $galleries;
    public ?HierarchicalMultiCriterionInput $tags;
    public ?IntCriterionInput $tag_count;
    public ?HierarchicalMultiCriterionInput $performer_tags;
    public ?bool $performer_favorite;
    public ?IntCriterionInput $performer_age;
    public ?MultiCriterionInput $performers;
    public ?IntCriterionInput $performer_count;
    public ?StashIDCriterionInput $stash_id_endpoint;
    public ?StashIDsCriterionInput $stash_ids_endpoint;
    public ?IntCriterionInput $stash_id_count;
    public ?StringCriterionInput $url;
    public ?bool $interactive;
    public ?IntCriterionInput $interactive_speed;
    public ?StringCriterionInput $captions;
    public ?IntCriterionInput $resume_time;
    public ?IntCriterionInput $play_count;
    public ?IntCriterionInput $play_duration;
    public ?TimestampCriterionInput $last_played_at;
    public ?DateCriterionInput $date;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;
    public ?GalleryFilterType $galleries_filter;
    public ?PerformerFilterType $performers_filter;
    public ?StudioFilterType $studios_filter;
    public ?TagFilterType $tags_filter;
    public ?MovieFilterType $movies_filter;
    public ?GroupFilterType $groups_filter;
    public ?SceneMarkerFilterType $markers_filter;
    public ?FileFilterType $files_filter;

    /** @var array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> */
    public ?array $custom_fields;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput> $custom_fields
     */
    public static function new(
        ?SceneFilterType $AND = null,
        ?SceneFilterType $OR = null,
        ?SceneFilterType $NOT = null,
        ?IntCriterionInput $id = null,
        ?StringCriterionInput $title = null,
        ?StringCriterionInput $code = null,
        ?StringCriterionInput $details = null,
        ?StringCriterionInput $director = null,
        ?StringCriterionInput $oshash = null,
        ?StringCriterionInput $checksum = null,
        ?StringCriterionInput $phash = null,
        ?PhashDistanceCriterionInput $phash_distance = null,
        ?StringCriterionInput $path = null,
        ?IntCriterionInput $file_count = null,
        ?IntCriterionInput $rating100 = null,
        ?bool $organized = null,
        ?IntCriterionInput $o_counter = null,
        ?DuplicationCriterionInput $duplicated = null,
        ?ResolutionCriterionInput $resolution = null,
        ?OrientationCriterionInput $orientation = null,
        ?IntCriterionInput $framerate = null,
        ?IntCriterionInput $bitrate = null,
        ?StringCriterionInput $video_codec = null,
        ?StringCriterionInput $audio_codec = null,
        ?IntCriterionInput $duration = null,
        ?string $has_markers = null,
        ?string $is_missing = null,
        ?HierarchicalMultiCriterionInput $studios = null,
        ?MultiCriterionInput $movies = null,
        ?HierarchicalMultiCriterionInput $groups = null,
        ?MultiCriterionInput $galleries = null,
        ?HierarchicalMultiCriterionInput $tags = null,
        ?IntCriterionInput $tag_count = null,
        ?HierarchicalMultiCriterionInput $performer_tags = null,
        ?bool $performer_favorite = null,
        ?IntCriterionInput $performer_age = null,
        ?MultiCriterionInput $performers = null,
        ?IntCriterionInput $performer_count = null,
        ?StashIDCriterionInput $stash_id_endpoint = null,
        ?StashIDsCriterionInput $stash_ids_endpoint = null,
        ?IntCriterionInput $stash_id_count = null,
        ?StringCriterionInput $url = null,
        ?bool $interactive = null,
        ?IntCriterionInput $interactive_speed = null,
        ?StringCriterionInput $captions = null,
        ?IntCriterionInput $resume_time = null,
        ?IntCriterionInput $play_count = null,
        ?IntCriterionInput $play_duration = null,
        ?TimestampCriterionInput $last_played_at = null,
        ?DateCriterionInput $date = null,
        ?TimestampCriterionInput $created_at = null,
        ?TimestampCriterionInput $updated_at = null,
        ?GalleryFilterType $galleries_filter = null,
        ?PerformerFilterType $performers_filter = null,
        ?StudioFilterType $studios_filter = null,
        ?TagFilterType $tags_filter = null,
        ?MovieFilterType $movies_filter = null,
        ?GroupFilterType $groups_filter = null,
        ?SceneMarkerFilterType $markers_filter = null,
        ?FileFilterType $files_filter = null,
        ?array $custom_fields = null,
    ): self {
        $self = new self();
        $self->AND = $AND;
        $self->OR = $OR;
        $self->NOT = $NOT;
        $self->id = $id;
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->director = $director;
        $self->oshash = $oshash;
        $self->checksum = $checksum;
        $self->phash = $phash;
        $self->phash_distance = $phash_distance;
        $self->path = $path;
        $self->file_count = $file_count;
        $self->rating100 = $rating100;
        $self->organized = $organized;
        $self->o_counter = $o_counter;
        $self->duplicated = $duplicated;
        $self->resolution = $resolution;
        $self->orientation = $orientation;
        $self->framerate = $framerate;
        $self->bitrate = $bitrate;
        $self->video_codec = $video_codec;
        $self->audio_codec = $audio_codec;
        $self->duration = $duration;
        $self->has_markers = $has_markers;
        $self->is_missing = $is_missing;
        $self->studios = $studios;
        $self->movies = $movies;
        $self->groups = $groups;
        $self->galleries = $galleries;
        $self->tags = $tags;
        $self->tag_count = $tag_count;
        $self->performer_tags = $performer_tags;
        $self->performer_favorite = $performer_favorite;
        $self->performer_age = $performer_age;
        $self->performers = $performers;
        $self->performer_count = $performer_count;
        $self->stash_id_endpoint = $stash_id_endpoint;
        $self->stash_ids_endpoint = $stash_ids_endpoint;
        $self->stash_id_count = $stash_id_count;
        $self->url = $url;
        $self->interactive = $interactive;
        $self->interactive_speed = $interactive_speed;
        $self->captions = $captions;
        $self->resume_time = $resume_time;
        $self->play_count = $play_count;
        $self->play_duration = $play_duration;
        $self->last_played_at = $last_played_at;
        $self->date = $date;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->galleries_filter = $galleries_filter;
        $self->performers_filter = $performers_filter;
        $self->studios_filter = $studios_filter;
        $self->tags_filter = $tags_filter;
        $self->movies_filter = $movies_filter;
        $self->groups_filter = $groups_filter;
        $self->markers_filter = $markers_filter;
        $self->files_filter = $files_filter;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('AND', $data)) {
            $self->AND = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['AND']);
        }
        if (array_key_exists('OR', $data)) {
            $self->OR = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['OR']);
        }
        if (array_key_exists('NOT', $data)) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['NOT']);
        }
        if (array_key_exists('id', $data)) {
            $self->id = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['id']);
        }
        if (array_key_exists('title', $data)) {
            $self->title = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['title']);
        }
        if (array_key_exists('code', $data)) {
            $self->code = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['code']);
        }
        if (array_key_exists('details', $data)) {
            $self->details = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['details']);
        }
        if (array_key_exists('director', $data)) {
            $self->director = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['director']);
        }
        if (array_key_exists('oshash', $data)) {
            $self->oshash = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['oshash']);
        }
        if (array_key_exists('checksum', $data)) {
            $self->checksum = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['checksum']);
        }
        if (array_key_exists('phash', $data)) {
            $self->phash = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['phash']);
        }
        if (array_key_exists('phash_distance', $data)) {
            $self->phash_distance = \Aazsamir\Stasphp\Graphql\PhashDistanceCriterionInput::fromArray($data['phash_distance']);
        }
        if (array_key_exists('path', $data)) {
            $self->path = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['path']);
        }
        if (array_key_exists('file_count', $data)) {
            $self->file_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['file_count']);
        }
        if (array_key_exists('rating100', $data)) {
            $self->rating100 = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (array_key_exists('organized', $data)) {
            $self->organized = $data['organized'];
        }
        if (array_key_exists('o_counter', $data)) {
            $self->o_counter = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['o_counter']);
        }
        if (array_key_exists('duplicated', $data)) {
            $self->duplicated = \Aazsamir\Stasphp\Graphql\DuplicationCriterionInput::fromArray($data['duplicated']);
        }
        if (array_key_exists('resolution', $data)) {
            $self->resolution = \Aazsamir\Stasphp\Graphql\ResolutionCriterionInput::fromArray($data['resolution']);
        }
        if (array_key_exists('orientation', $data)) {
            $self->orientation = \Aazsamir\Stasphp\Graphql\OrientationCriterionInput::fromArray($data['orientation']);
        }
        if (array_key_exists('framerate', $data)) {
            $self->framerate = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['framerate']);
        }
        if (array_key_exists('bitrate', $data)) {
            $self->bitrate = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['bitrate']);
        }
        if (array_key_exists('video_codec', $data)) {
            $self->video_codec = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['video_codec']);
        }
        if (array_key_exists('audio_codec', $data)) {
            $self->audio_codec = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['audio_codec']);
        }
        if (array_key_exists('duration', $data)) {
            $self->duration = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['duration']);
        }
        if (array_key_exists('has_markers', $data)) {
            $self->has_markers = $data['has_markers'];
        }
        if (array_key_exists('is_missing', $data)) {
            $self->is_missing = $data['is_missing'];
        }
        if (array_key_exists('studios', $data)) {
            $self->studios = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (array_key_exists('movies', $data)) {
            $self->movies = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['movies']);
        }
        if (array_key_exists('groups', $data)) {
            $self->groups = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['groups']);
        }
        if (array_key_exists('galleries', $data)) {
            $self->galleries = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['galleries']);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (array_key_exists('tag_count', $data)) {
            $self->tag_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (array_key_exists('performer_tags', $data)) {
            $self->performer_tags = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['performer_tags']);
        }
        if (array_key_exists('performer_favorite', $data)) {
            $self->performer_favorite = $data['performer_favorite'];
        }
        if (array_key_exists('performer_age', $data)) {
            $self->performer_age = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['performer_age']);
        }
        if (array_key_exists('performers', $data)) {
            $self->performers = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (array_key_exists('performer_count', $data)) {
            $self->performer_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['performer_count']);
        }
        if (array_key_exists('stash_id_endpoint', $data)) {
            $self->stash_id_endpoint = \Aazsamir\Stasphp\Graphql\StashIDCriterionInput::fromArray($data['stash_id_endpoint']);
        }
        if (array_key_exists('stash_ids_endpoint', $data)) {
            $self->stash_ids_endpoint = \Aazsamir\Stasphp\Graphql\StashIDsCriterionInput::fromArray($data['stash_ids_endpoint']);
        }
        if (array_key_exists('stash_id_count', $data)) {
            $self->stash_id_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['stash_id_count']);
        }
        if (array_key_exists('url', $data)) {
            $self->url = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['url']);
        }
        if (array_key_exists('interactive', $data)) {
            $self->interactive = $data['interactive'];
        }
        if (array_key_exists('interactive_speed', $data)) {
            $self->interactive_speed = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['interactive_speed']);
        }
        if (array_key_exists('captions', $data)) {
            $self->captions = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['captions']);
        }
        if (array_key_exists('resume_time', $data)) {
            $self->resume_time = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['resume_time']);
        }
        if (array_key_exists('play_count', $data)) {
            $self->play_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['play_count']);
        }
        if (array_key_exists('play_duration', $data)) {
            $self->play_duration = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['play_duration']);
        }
        if (array_key_exists('last_played_at', $data)) {
            $self->last_played_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['last_played_at']);
        }
        if (array_key_exists('date', $data)) {
            $self->date = \Aazsamir\Stasphp\Graphql\DateCriterionInput::fromArray($data['date']);
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (array_key_exists('galleries_filter', $data)) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (array_key_exists('performers_filter', $data)) {
            $self->performers_filter = \Aazsamir\Stasphp\Graphql\PerformerFilterType::fromArray($data['performers_filter']);
        }
        if (array_key_exists('studios_filter', $data)) {
            $self->studios_filter = \Aazsamir\Stasphp\Graphql\StudioFilterType::fromArray($data['studios_filter']);
        }
        if (array_key_exists('tags_filter', $data)) {
            $self->tags_filter = \Aazsamir\Stasphp\Graphql\TagFilterType::fromArray($data['tags_filter']);
        }
        if (array_key_exists('movies_filter', $data)) {
            $self->movies_filter = \Aazsamir\Stasphp\Graphql\MovieFilterType::fromArray($data['movies_filter']);
        }
        if (array_key_exists('groups_filter', $data)) {
            $self->groups_filter = \Aazsamir\Stasphp\Graphql\GroupFilterType::fromArray($data['groups_filter']);
        }
        if (array_key_exists('markers_filter', $data)) {
            $self->markers_filter = \Aazsamir\Stasphp\Graphql\SceneMarkerFilterType::fromArray($data['markers_filter']);
        }
        if (array_key_exists('files_filter', $data)) {
            $self->files_filter = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['files_filter']);
        }
        if (array_key_exists('custom_fields', $data)) {
            $self->custom_fields = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\CustomFieldCriterionInput::fromArray($data);
            }, $data['custom_fields'] ?? []);
        }

        return $self;
    }
}
