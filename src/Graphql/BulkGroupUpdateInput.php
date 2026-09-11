<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class BulkGroupUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $clientMutationId;

    /** @var array<string> */
    public ?array $ids;
    public ?int $rating100;
    public ?string $date;
    public ?string $synopsis;
    public ?string $studio_id;
    public ?string $director;
    public ?BulkUpdateStrings $urls;
    public ?BulkUpdateIds $tag_ids;
    public ?BulkUpdateGroupDescriptionsInput $containing_groups;
    public ?BulkUpdateGroupDescriptionsInput $sub_groups;
    public ?CustomFieldsInput $custom_fields;

    /**
     * @param array<string> $ids
     */
    public static function new(
        ?string $clientMutationId = null,
        ?array $ids = null,
        ?int $rating100 = null,
        ?string $date = null,
        ?string $synopsis = null,
        ?string $studio_id = null,
        ?string $director = null,
        ?BulkUpdateStrings $urls = null,
        ?BulkUpdateIds $tag_ids = null,
        ?BulkUpdateGroupDescriptionsInput $containing_groups = null,
        ?BulkUpdateGroupDescriptionsInput $sub_groups = null,
        ?CustomFieldsInput $custom_fields = null,
    ): self {
        $self = new self();
        $self->clientMutationId = $clientMutationId;
        $self->ids = $ids;
        $self->rating100 = $rating100;
        $self->date = $date;
        $self->synopsis = $synopsis;
        $self->studio_id = $studio_id;
        $self->director = $director;
        $self->urls = $urls;
        $self->tag_ids = $tag_ids;
        $self->containing_groups = $containing_groups;
        $self->sub_groups = $sub_groups;
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
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
        }
        if (isset($data['synopsis'])) {
            $self->synopsis = $data['synopsis'];
        }
        if (isset($data['studio_id'])) {
            $self->studio_id = $data['studio_id'];
        }
        if (isset($data['director'])) {
            $self->director = $data['director'];
        }
        if (isset($data['urls'])) {
            $self->urls = \Aazsamir\Stasphp\Graphpql\BulkUpdateStrings::fromArray($data['urls']);
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = \Aazsamir\Stasphp\Graphpql\BulkUpdateIds::fromArray($data['tag_ids']);
        }
        if (isset($data['containing_groups'])) {
            $self->containing_groups = \Aazsamir\Stasphp\Graphpql\BulkUpdateGroupDescriptionsInput::fromArray($data['containing_groups']);
        }
        if (isset($data['sub_groups'])) {
            $self->sub_groups = \Aazsamir\Stasphp\Graphpql\BulkUpdateGroupDescriptionsInput::fromArray($data['sub_groups']);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = \Aazsamir\Stasphp\Graphpql\CustomFieldsInput::fromArray($data['custom_fields']);
        }

        return $self;
    }
}
