<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class BulkMovieUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $clientMutationId;

    /** @var array<string> */
    public ?array $ids;
    public ?int $rating100;
    public ?string $studio_id;
    public ?string $director;
    public ?BulkUpdateStrings $urls;
    public ?BulkUpdateIds $tag_ids;

    /**
     * @param array<string> $ids
     */
    public static function new(
        ?string $clientMutationId = null,
        ?array $ids = null,
        ?int $rating100 = null,
        ?string $studio_id = null,
        ?string $director = null,
        ?BulkUpdateStrings $urls = null,
        ?BulkUpdateIds $tag_ids = null,
    ): self {
        $self = new self();
        $self->clientMutationId = $clientMutationId;
        $self->ids = $ids;
        $self->rating100 = $rating100;
        $self->studio_id = $studio_id;
        $self->director = $director;
        $self->urls = $urls;
        $self->tag_ids = $tag_ids;

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
        if (isset($data['studio_id'])) {
            $self->studio_id = $data['studio_id'];
        }
        if (isset($data['director'])) {
            $self->director = $data['director'];
        }
        if (isset($data['urls'])) {
            $self->urls = \Aazsamir\Stasphp\Graphql\BulkUpdateStrings::fromArray($data['urls']);
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = \Aazsamir\Stasphp\Graphql\BulkUpdateIds::fromArray($data['tag_ids']);
        }

        return $self;
    }
}
