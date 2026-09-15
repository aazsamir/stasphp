<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class GalleryCreateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $title;
    public ?string $code;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $date;
    public ?string $details;
    public ?string $photographer;
    public ?int $rating100;
    public ?bool $organized;

    /** @var array<string> */
    public ?array $scene_ids;
    public ?string $studio_id;

    /** @var array<string> */
    public ?array $tag_ids;

    /** @var array<string> */
    public ?array $performer_ids;
    public mixed $custom_fields;

    /**
     * @param array<string> $urls
     * @param array<string> $scene_ids
     * @param array<string> $tag_ids
     * @param array<string> $performer_ids
     */
    public static function new(
        string $title,
        ?string $code = null,
        ?string $url = null,
        ?array $urls = null,
        ?string $date = null,
        ?string $details = null,
        ?string $photographer = null,
        ?int $rating100 = null,
        ?bool $organized = null,
        ?array $scene_ids = null,
        ?string $studio_id = null,
        ?array $tag_ids = null,
        ?array $performer_ids = null,
        mixed $custom_fields = null,
    ): self {
        $self = new self();
        $self->title = $title;
        $self->code = $code;
        $self->url = $url;
        $self->urls = $urls;
        $self->date = $date;
        $self->details = $details;
        $self->photographer = $photographer;
        $self->rating100 = $rating100;
        $self->organized = $organized;
        $self->scene_ids = $scene_ids;
        $self->studio_id = $studio_id;
        $self->tag_ids = $tag_ids;
        $self->performer_ids = $performer_ids;
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
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['photographer'])) {
            $self->photographer = $data['photographer'];
        }
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }
        if (isset($data['scene_ids'])) {
            $self->scene_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['scene_ids'] ?? []);
        }
        if (isset($data['studio_id'])) {
            $self->studio_id = $data['studio_id'];
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }
        if (isset($data['performer_ids'])) {
            $self->performer_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['performer_ids'] ?? []);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = $data['custom_fields'];
        }

        return $self;
    }
}
