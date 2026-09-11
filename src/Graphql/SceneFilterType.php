<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

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

    /** @var array<\Aazsamir\Stasphp\Graphpql\CustomFieldCriterionInput> */
    public ?array $custom_fields;

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\CustomFieldCriterionInput> $custom_fields
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
        if (isset($data['AND'])) {
            $self->AND = \Aazsamir\Stasphp\Graphpql\SceneFilterType::fromArray($data['AND']);
        }
        if (isset($data['OR'])) {
            $self->OR = \Aazsamir\Stasphp\Graphpql\SceneFilterType::fromArray($data['OR']);
        }
        if (isset($data['NOT'])) {
            $self->NOT = \Aazsamir\Stasphp\Graphpql\SceneFilterType::fromArray($data['NOT']);
        }
        if (isset($data['id'])) {
            $self->id = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['id']);
        }
        if (isset($data['title'])) {
            $self->title = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['title']);
        }
        if (isset($data['code'])) {
            $self->code = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['code']);
        }
        if (isset($data['details'])) {
            $self->details = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['details']);
        }
        if (isset($data['director'])) {
            $self->director = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['director']);
        }
        if (isset($data['oshash'])) {
            $self->oshash = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['oshash']);
        }
        if (isset($data['checksum'])) {
            $self->checksum = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['checksum']);
        }
        if (isset($data['phash'])) {
            $self->phash = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['phash']);
        }
        if (isset($data['phash_distance'])) {
            $self->phash_distance = \Aazsamir\Stasphp\Graphpql\PhashDistanceCriterionInput::fromArray($data['phash_distance']);
        }
        if (isset($data['path'])) {
            $self->path = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['path']);
        }
        if (isset($data['file_count'])) {
            $self->file_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['file_count']);
        }
        if (isset($data['rating100'])) {
            $self->rating100 = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['rating100']);
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }
        if (isset($data['o_counter'])) {
            $self->o_counter = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['o_counter']);
        }
        if (isset($data['duplicated'])) {
            $self->duplicated = \Aazsamir\Stasphp\Graphpql\DuplicationCriterionInput::fromArray($data['duplicated']);
        }
        if (isset($data['resolution'])) {
            $self->resolution = \Aazsamir\Stasphp\Graphpql\ResolutionCriterionInput::fromArray($data['resolution']);
        }
        if (isset($data['orientation'])) {
            $self->orientation = \Aazsamir\Stasphp\Graphpql\OrientationCriterionInput::fromArray($data['orientation']);
        }
        if (isset($data['framerate'])) {
            $self->framerate = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['framerate']);
        }
        if (isset($data['bitrate'])) {
            $self->bitrate = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['bitrate']);
        }
        if (isset($data['video_codec'])) {
            $self->video_codec = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['video_codec']);
        }
        if (isset($data['audio_codec'])) {
            $self->audio_codec = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['audio_codec']);
        }
        if (isset($data['duration'])) {
            $self->duration = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['duration']);
        }
        if (isset($data['has_markers'])) {
            $self->has_markers = $data['has_markers'];
        }
        if (isset($data['is_missing'])) {
            $self->is_missing = $data['is_missing'];
        }
        if (isset($data['studios'])) {
            $self->studios = \Aazsamir\Stasphp\Graphpql\HierarchicalMultiCriterionInput::fromArray($data['studios']);
        }
        if (isset($data['movies'])) {
            $self->movies = \Aazsamir\Stasphp\Graphpql\MultiCriterionInput::fromArray($data['movies']);
        }
        if (isset($data['groups'])) {
            $self->groups = \Aazsamir\Stasphp\Graphpql\HierarchicalMultiCriterionInput::fromArray($data['groups']);
        }
        if (isset($data['galleries'])) {
            $self->galleries = \Aazsamir\Stasphp\Graphpql\MultiCriterionInput::fromArray($data['galleries']);
        }
        if (isset($data['tags'])) {
            $self->tags = \Aazsamir\Stasphp\Graphpql\HierarchicalMultiCriterionInput::fromArray($data['tags']);
        }
        if (isset($data['tag_count'])) {
            $self->tag_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['tag_count']);
        }
        if (isset($data['performer_tags'])) {
            $self->performer_tags = \Aazsamir\Stasphp\Graphpql\HierarchicalMultiCriterionInput::fromArray($data['performer_tags']);
        }
        if (isset($data['performer_favorite'])) {
            $self->performer_favorite = $data['performer_favorite'];
        }
        if (isset($data['performer_age'])) {
            $self->performer_age = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['performer_age']);
        }
        if (isset($data['performers'])) {
            $self->performers = \Aazsamir\Stasphp\Graphpql\MultiCriterionInput::fromArray($data['performers']);
        }
        if (isset($data['performer_count'])) {
            $self->performer_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['performer_count']);
        }
        if (isset($data['stash_id_endpoint'])) {
            $self->stash_id_endpoint = \Aazsamir\Stasphp\Graphpql\StashIDCriterionInput::fromArray($data['stash_id_endpoint']);
        }
        if (isset($data['stash_ids_endpoint'])) {
            $self->stash_ids_endpoint = \Aazsamir\Stasphp\Graphpql\StashIDsCriterionInput::fromArray($data['stash_ids_endpoint']);
        }
        if (isset($data['stash_id_count'])) {
            $self->stash_id_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['stash_id_count']);
        }
        if (isset($data['url'])) {
            $self->url = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['url']);
        }
        if (isset($data['interactive'])) {
            $self->interactive = $data['interactive'];
        }
        if (isset($data['interactive_speed'])) {
            $self->interactive_speed = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['interactive_speed']);
        }
        if (isset($data['captions'])) {
            $self->captions = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['captions']);
        }
        if (isset($data['resume_time'])) {
            $self->resume_time = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['resume_time']);
        }
        if (isset($data['play_count'])) {
            $self->play_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['play_count']);
        }
        if (isset($data['play_duration'])) {
            $self->play_duration = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['play_duration']);
        }
        if (isset($data['last_played_at'])) {
            $self->last_played_at = \Aazsamir\Stasphp\Graphpql\TimestampCriterionInput::fromArray($data['last_played_at']);
        }
        if (isset($data['date'])) {
            $self->date = \Aazsamir\Stasphp\Graphpql\DateCriterionInput::fromArray($data['date']);
        }
        if (isset($data['created_at'])) {
            $self->created_at = \Aazsamir\Stasphp\Graphpql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = \Aazsamir\Stasphp\Graphpql\TimestampCriterionInput::fromArray($data['updated_at']);
        }
        if (isset($data['galleries_filter'])) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphpql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (isset($data['performers_filter'])) {
            $self->performers_filter = \Aazsamir\Stasphp\Graphpql\PerformerFilterType::fromArray($data['performers_filter']);
        }
        if (isset($data['studios_filter'])) {
            $self->studios_filter = \Aazsamir\Stasphp\Graphpql\StudioFilterType::fromArray($data['studios_filter']);
        }
        if (isset($data['tags_filter'])) {
            $self->tags_filter = \Aazsamir\Stasphp\Graphpql\TagFilterType::fromArray($data['tags_filter']);
        }
        if (isset($data['movies_filter'])) {
            $self->movies_filter = \Aazsamir\Stasphp\Graphpql\MovieFilterType::fromArray($data['movies_filter']);
        }
        if (isset($data['groups_filter'])) {
            $self->groups_filter = \Aazsamir\Stasphp\Graphpql\GroupFilterType::fromArray($data['groups_filter']);
        }
        if (isset($data['markers_filter'])) {
            $self->markers_filter = \Aazsamir\Stasphp\Graphpql\SceneMarkerFilterType::fromArray($data['markers_filter']);
        }
        if (isset($data['files_filter'])) {
            $self->files_filter = \Aazsamir\Stasphp\Graphpql\FileFilterType::fromArray($data['files_filter']);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\CustomFieldCriterionInput::fromArray($data);
            }, $data['custom_fields'] ?? []);
        }

        return $self;
    }
}
