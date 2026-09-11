<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class MovieCreateInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $name;
    public ?string $aliases;
    public ?int $duration;
    public ?string $date;
    public ?int $rating100;
    public ?string $studio_id;
    public ?string $director;
    public ?string $synopsis;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;

    /** @var array<string> */
    public ?array $tag_ids;
    public ?string $front_image;
    public ?string $back_image;

    /**
     * @param array<string> $urls
     * @param array<string> $tag_ids
     */
    public static function new(
        string $name,
        ?string $aliases = null,
        ?int $duration = null,
        ?string $date = null,
        ?int $rating100 = null,
        ?string $studio_id = null,
        ?string $director = null,
        ?string $synopsis = null,
        ?string $url = null,
        ?array $urls = null,
        ?array $tag_ids = null,
        ?string $front_image = null,
        ?string $back_image = null,
    ): self {
        $self = new self();
        $self->name = $name;
        $self->aliases = $aliases;
        $self->duration = $duration;
        $self->date = $date;
        $self->rating100 = $rating100;
        $self->studio_id = $studio_id;
        $self->director = $director;
        $self->synopsis = $synopsis;
        $self->url = $url;
        $self->urls = $urls;
        $self->tag_ids = $tag_ids;
        $self->front_image = $front_image;
        $self->back_image = $back_image;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['aliases'])) {
            $self->aliases = $data['aliases'];
        }
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
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
        if (isset($data['synopsis'])) {
            $self->synopsis = $data['synopsis'];
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
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }
        if (isset($data['front_image'])) {
            $self->front_image = $data['front_image'];
        }
        if (isset($data['back_image'])) {
            $self->back_image = $data['back_image'];
        }

        return $self;
    }
}
