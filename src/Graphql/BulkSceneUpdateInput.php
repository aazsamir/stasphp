<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class BulkSceneUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $clientMutationId;

    /** @var array<string> */
    public ?array $ids;
    public ?string $title;
    public ?string $code;
    public ?string $details;
    public ?string $director;
    public ?string $url;
    public ?BulkUpdateStrings $urls;
    public ?string $date;
    public ?int $rating100;
    public ?bool $organized;
    public ?string $studio_id;
    public ?BulkUpdateIds $gallery_ids;
    public ?BulkUpdateIds $performer_ids;
    public ?BulkUpdateIds $tag_ids;
    public ?BulkUpdateIds $group_ids;
    public ?BulkUpdateIds $movie_ids;
    public ?CustomFieldsInput $custom_fields;

    /**
     * @param array<string> $ids
     */
    public static function new(
        ?string $clientMutationId = null,
        ?array $ids = null,
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $director = null,
        ?string $url = null,
        ?BulkUpdateStrings $urls = null,
        ?string $date = null,
        ?int $rating100 = null,
        ?bool $organized = null,
        ?string $studio_id = null,
        ?BulkUpdateIds $gallery_ids = null,
        ?BulkUpdateIds $performer_ids = null,
        ?BulkUpdateIds $tag_ids = null,
        ?BulkUpdateIds $group_ids = null,
        ?BulkUpdateIds $movie_ids = null,
        ?CustomFieldsInput $custom_fields = null,
    ): self {
        $self = new self();
        $self->clientMutationId = $clientMutationId;
        $self->ids = $ids;
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
        $self->tag_ids = $tag_ids;
        $self->group_ids = $group_ids;
        $self->movie_ids = $movie_ids;
        $self->custom_fields = $custom_fields;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['clientMutationId'])) {
            $self->clientMutationId = $data['clientMutationId'];
        }
        if (isset($data['ids'])) {
            $self->ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['ids'] ?? []);
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
            $self->urls = \Aazsamir\Stasphp\Graphql\BulkUpdateStrings::fromArray($data['urls']);
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
            $self->gallery_ids = \Aazsamir\Stasphp\Graphql\BulkUpdateIds::fromArray($data['gallery_ids']);
        }
        if (isset($data['performer_ids'])) {
            $self->performer_ids = \Aazsamir\Stasphp\Graphql\BulkUpdateIds::fromArray($data['performer_ids']);
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = \Aazsamir\Stasphp\Graphql\BulkUpdateIds::fromArray($data['tag_ids']);
        }
        if (isset($data['group_ids'])) {
            $self->group_ids = \Aazsamir\Stasphp\Graphql\BulkUpdateIds::fromArray($data['group_ids']);
        }
        if (isset($data['movie_ids'])) {
            $self->movie_ids = \Aazsamir\Stasphp\Graphql\BulkUpdateIds::fromArray($data['movie_ids']);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = \Aazsamir\Stasphp\Graphql\CustomFieldsInput::fromArray($data['custom_fields']);
        }

        return $self;
    }
}
