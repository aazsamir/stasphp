<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ImageUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $clientMutationId;
    public string $id;
    public ?string $title;
    public ?string $code;
    public ?int $rating100;
    public ?bool $organized;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $date;
    public ?string $details;
    public ?string $photographer;
    public ?string $studio_id;

    /** @var array<string> */
    public ?array $performer_ids;

    /** @var array<string> */
    public ?array $tag_ids;

    /** @var array<string> */
    public ?array $gallery_ids;
    public ?string $primary_file_id;
    public ?CustomFieldsInput $custom_fields;

    /**
     * @param array<string> $urls
     * @param array<string> $performer_ids
     * @param array<string> $tag_ids
     * @param array<string> $gallery_ids
     */
    public static function new(
        string $id,
        ?string $clientMutationId = null,
        ?string $title = null,
        ?string $code = null,
        ?int $rating100 = null,
        ?bool $organized = null,
        ?string $url = null,
        ?array $urls = null,
        ?string $date = null,
        ?string $details = null,
        ?string $photographer = null,
        ?string $studio_id = null,
        ?array $performer_ids = null,
        ?array $tag_ids = null,
        ?array $gallery_ids = null,
        ?string $primary_file_id = null,
        ?CustomFieldsInput $custom_fields = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->clientMutationId = $clientMutationId;
        $self->title = $title;
        $self->code = $code;
        $self->rating100 = $rating100;
        $self->organized = $organized;
        $self->url = $url;
        $self->urls = $urls;
        $self->date = $date;
        $self->details = $details;
        $self->photographer = $photographer;
        $self->studio_id = $studio_id;
        $self->performer_ids = $performer_ids;
        $self->tag_ids = $tag_ids;
        $self->gallery_ids = $gallery_ids;
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
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
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
        if (isset($data['studio_id'])) {
            $self->studio_id = $data['studio_id'];
        }
        if (isset($data['performer_ids'])) {
            $self->performer_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['performer_ids'] ?? []);
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }
        if (isset($data['gallery_ids'])) {
            $self->gallery_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['gallery_ids'] ?? []);
        }
        if (isset($data['primary_file_id'])) {
            $self->primary_file_id = $data['primary_file_id'];
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = \Aazsamir\Stasphp\Graphql\CustomFieldsInput::fromArray($data['custom_fields']);
        }

        return $self;
    }
}
