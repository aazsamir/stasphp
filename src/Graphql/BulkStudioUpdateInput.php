<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class BulkStudioUpdateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public array $ids;
    public ?string $url;
    public ?BulkUpdateStrings $urls;
    public ?string $parent_id;
    public ?int $rating100;
    public ?bool $favorite;
    public ?string $details;
    public ?BulkUpdateIds $tag_ids;
    public ?bool $ignore_auto_tag;
    public ?bool $organized;

    /**
     * @param array<string> $ids
     */
    public static function new(
        array $ids,
        ?string $url = null,
        ?BulkUpdateStrings $urls = null,
        ?string $parent_id = null,
        ?int $rating100 = null,
        ?bool $favorite = null,
        ?string $details = null,
        ?BulkUpdateIds $tag_ids = null,
        ?bool $ignore_auto_tag = null,
        ?bool $organized = null,
    ): self {
        $self = new self();
        $self->ids = $ids;
        $self->url = $url;
        $self->urls = $urls;
        $self->parent_id = $parent_id;
        $self->rating100 = $rating100;
        $self->favorite = $favorite;
        $self->details = $details;
        $self->tag_ids = $tag_ids;
        $self->ignore_auto_tag = $ignore_auto_tag;
        $self->organized = $organized;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['ids'])) {
            $self->ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['ids'] ?? []);
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['urls'])) {
            $self->urls = \Aazsamir\Stasphp\Graphpql\BulkUpdateStrings::fromArray($data['urls']);
        }
        if (isset($data['parent_id'])) {
            $self->parent_id = $data['parent_id'];
        }
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['favorite'])) {
            $self->favorite = $data['favorite'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = \Aazsamir\Stasphp\Graphpql\BulkUpdateIds::fromArray($data['tag_ids']);
        }
        if (isset($data['ignore_auto_tag'])) {
            $self->ignore_auto_tag = $data['ignore_auto_tag'];
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }

        return $self;
    }
}
