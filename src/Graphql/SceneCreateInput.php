<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneCreateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $title;
    public ?string $code;
    public ?string $details;
    public ?string $director;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $date;
    public ?int $rating100;
    public ?bool $organized;
    public ?string $studio_id;

    /** @var array<string> */
    public ?array $gallery_ids;

    /** @var array<string> */
    public ?array $performer_ids;

    /** @var array<\Aazsamir\Stasphp\Graphql\SceneGroupInput> */
    public ?array $groups;

    /** @var array<\Aazsamir\Stasphp\Graphql\SceneMovieInput> */
    public ?array $movies;

    /** @var array<string> */
    public ?array $tag_ids;
    public ?string $cover_image;

    /** @var array<\Aazsamir\Stasphp\Graphql\StashIDInput> */
    public ?array $stash_ids;

    /** @var array<string> */
    public ?array $file_ids;
    public mixed $custom_fields;

    /**
     * @param array<string> $urls
     * @param array<string> $gallery_ids
     * @param array<string> $performer_ids
     * @param array<\Aazsamir\Stasphp\Graphql\SceneGroupInput> $groups
     * @param array<\Aazsamir\Stasphp\Graphql\SceneMovieInput> $movies
     * @param array<string> $tag_ids
     * @param array<\Aazsamir\Stasphp\Graphql\StashIDInput> $stash_ids
     * @param array<string> $file_ids
     */
    public static function new(
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $director = null,
        ?string $url = null,
        ?array $urls = null,
        ?string $date = null,
        ?int $rating100 = null,
        ?bool $organized = null,
        ?string $studio_id = null,
        ?array $gallery_ids = null,
        ?array $performer_ids = null,
        ?array $groups = null,
        ?array $movies = null,
        ?array $tag_ids = null,
        ?string $cover_image = null,
        ?array $stash_ids = null,
        ?array $file_ids = null,
        mixed $custom_fields = null,
    ): self {
        $self = new self();
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->director = $director;
        $self->url = $url;
        $self->urls = $urls;
        $self->date = $date;
        $self->rating100 = $rating100;
        $self->organized = $organized;
        $self->studio_id = $studio_id;
        $self->gallery_ids = $gallery_ids;
        $self->performer_ids = $performer_ids;
        $self->groups = $groups;
        $self->movies = $movies;
        $self->tag_ids = $tag_ids;
        $self->cover_image = $cover_image;
        $self->stash_ids = $stash_ids;
        $self->file_ids = $file_ids;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
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

                return \Aazsamir\Stasphp\Graphql\SceneGroupInput::fromArray($data);
            }, $data['groups'] ?? []);
        }
        if (isset($data['movies'])) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\SceneMovieInput::fromArray($data);
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

                return \Aazsamir\Stasphp\Graphql\StashIDInput::fromArray($data);
            }, $data['stash_ids'] ?? []);
        }
        if (isset($data['file_ids'])) {
            $self->file_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['file_ids'] ?? []);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = $data['custom_fields'];
        }

        return $self;
    }
}
