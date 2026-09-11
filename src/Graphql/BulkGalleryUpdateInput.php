<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class BulkGalleryUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $clientMutationId;

    /** @var array<string> */
    public ?array $ids;
    public ?string $code;
    public ?string $url;
    public ?BulkUpdateStrings $urls;
    public ?string $date;
    public ?string $details;
    public ?string $photographer;
    public ?int $rating100;
    public ?bool $organized;
    public ?BulkUpdateIds $scene_ids;
    public ?string $studio_id;
    public ?BulkUpdateIds $tag_ids;
    public ?BulkUpdateIds $performer_ids;
    public ?CustomFieldsInput $custom_fields;

    /**
     * @param array<string> $ids
     */
    public static function new(
        ?string $clientMutationId = null,
        ?array $ids = null,
        ?string $code = null,
        ?string $url = null,
        ?BulkUpdateStrings $urls = null,
        ?string $date = null,
        ?string $details = null,
        ?string $photographer = null,
        ?int $rating100 = null,
        ?bool $organized = null,
        ?BulkUpdateIds $scene_ids = null,
        ?string $studio_id = null,
        ?BulkUpdateIds $tag_ids = null,
        ?BulkUpdateIds $performer_ids = null,
        ?CustomFieldsInput $custom_fields = null,
    ): self {
        $self = new self();
        $self->clientMutationId = $clientMutationId;
        $self->ids = $ids;
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
        if (isset($data['code'])) {
            $self->code = $data['code'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['urls'])) {
            $self->urls = \Aazsamir\Stasphp\Graphpql\BulkUpdateStrings::fromArray($data['urls']);
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
            $self->scene_ids = \Aazsamir\Stasphp\Graphpql\BulkUpdateIds::fromArray($data['scene_ids']);
        }
        if (isset($data['studio_id'])) {
            $self->studio_id = $data['studio_id'];
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = \Aazsamir\Stasphp\Graphpql\BulkUpdateIds::fromArray($data['tag_ids']);
        }
        if (isset($data['performer_ids'])) {
            $self->performer_ids = \Aazsamir\Stasphp\Graphpql\BulkUpdateIds::fromArray($data['performer_ids']);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = \Aazsamir\Stasphp\Graphpql\CustomFieldsInput::fromArray($data['custom_fields']);
        }

        return $self;
    }
}
