<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapedSceneInput implements \Aazsamir\Graphpql\Model\GraphObject
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
    public ?string $remote_site_id;

    /**
     * @param array<string> $urls
     */
    public static function new(
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $director = null,
        ?string $url = null,
        ?array $urls = null,
        ?string $date = null,
        ?string $remote_site_id = null,
    ): self {
        $self = new self();
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->director = $director;
        $self->url = $url;
        $self->urls = $urls;
        $self->date = $date;
        $self->remote_site_id = $remote_site_id;

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
        if (isset($data['remote_site_id'])) {
            $self->remote_site_id = $data['remote_site_id'];
        }

        return $self;
    }
}
