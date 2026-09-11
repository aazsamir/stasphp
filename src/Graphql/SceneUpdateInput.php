<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $clientMutationId;
    public string $id;
    public ?string $title;
    public ?string $code;
    public ?string $details;
    public ?string $director;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $date;
    public ?int $rating100;
    public ?int $o_counter;
    public ?bool $organized;
    public ?string $studio_id;

    /** @var array<string> */
    public ?array $gallery_ids;

    /** @var array<string> */
    public ?array $performer_ids;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SceneGroupInput> */
    public ?array $groups;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SceneMovieInput> */
    public ?array $movies;

    /** @var array<string> */
    public ?array $tag_ids;
    public ?string $cover_image;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashIDInput> */
    public ?array $stash_ids;
    public ?float $resume_time;
    public ?float $play_duration;
    public ?int $play_count;
    public ?string $primary_file_id;
    public ?CustomFieldsInput $custom_fields;

    /**
     * @param array<string> $urls
     * @param array<string> $gallery_ids
     * @param array<string> $performer_ids
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneGroupInput> $groups
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneMovieInput> $movies
     * @param array<string> $tag_ids
     * @param array<\Aazsamir\Stasphp\Graphpql\StashIDInput> $stash_ids
     */
    public static function new(
        string $id,
        ?string $clientMutationId = null,
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $director = null,
        ?string $url = null,
        ?array $urls = null,
        ?string $date = null,
        ?int $rating100 = null,
        ?int $o_counter = null,
        ?bool $organized = null,
        ?string $studio_id = null,
        ?array $gallery_ids = null,
        ?array $performer_ids = null,
        ?array $groups = null,
        ?array $movies = null,
        ?array $tag_ids = null,
        ?string $cover_image = null,
        ?array $stash_ids = null,
        ?float $resume_time = null,
        ?float $play_duration = null,
        ?int $play_count = null,
        ?string $primary_file_id = null,
        ?CustomFieldsInput $custom_fields = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->clientMutationId = $clientMutationId;
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->director = $director;
        $self->url = $url;
        $self->urls = $urls;
        $self->date = $date;
        $self->rating100 = $rating100;
        $self->o_counter = $o_counter;
        $self->organized = $organized;
        $self->studio_id = $studio_id;
        $self->gallery_ids = $gallery_ids;
        $self->performer_ids = $performer_ids;
        $self->groups = $groups;
        $self->movies = $movies;
        $self->tag_ids = $tag_ids;
        $self->cover_image = $cover_image;
        $self->stash_ids = $stash_ids;
        $self->resume_time = $resume_time;
        $self->play_duration = $play_duration;
        $self->play_count = $play_count;
        $self->primary_file_id = $primary_file_id;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['clientMutationId'])) {
            $self->clientMutationId = $data['clientMutationId'];
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['code'])) {
            $self->code = $data['code'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['director'])) {
            $self->director = $data['director'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
        }
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['o_counter'])) {
            $self->o_counter = $data['o_counter'];
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }
        if (isset($data['studio_id'])) {
            $self->studio_id = $data['studio_id'];
        }
        if (isset($data['gallery_ids'])) {
            $self->gallery_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['gallery_ids'] ?? []);
        }
        if (isset($data['performer_ids'])) {
            $self->performer_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['performer_ids'] ?? []);
        }
        if (isset($data['groups'])) {
            $self->groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SceneGroupInput::fromArray($data);
            }, $data['groups'] ?? []);
        }
        if (isset($data['movies'])) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SceneMovieInput::fromArray($data);
            }, $data['movies'] ?? []);
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }
        if (isset($data['cover_image'])) {
            $self->cover_image = $data['cover_image'];
        }
        if (isset($data['stash_ids'])) {
            $self->stash_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\StashIDInput::fromArray($data);
            }, $data['stash_ids'] ?? []);
        }
        if (isset($data['resume_time'])) {
            $self->resume_time = $data['resume_time'];
        }
        if (isset($data['play_duration'])) {
            $self->play_duration = $data['play_duration'];
        }
        if (isset($data['play_count'])) {
            $self->play_count = $data['play_count'];
        }
        if (isset($data['primary_file_id'])) {
            $self->primary_file_id = $data['primary_file_id'];
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = \Aazsamir\Stasphp\Graphpql\CustomFieldsInput::fromArray($data['custom_fields']);
        }

        return $self;
    }
}
