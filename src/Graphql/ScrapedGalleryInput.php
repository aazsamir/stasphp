<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapedGalleryInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $title;
    public ?string $code;
    public ?string $details;
    public ?string $photographer;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $date;

    /**
     * @param array<string> $urls
     */
    public static function new(
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $photographer = null,
        ?string $url = null,
        ?array $urls = null,
        ?string $date = null,
    ): self {
        $self = new self();
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->photographer = $photographer;
        $self->url = $url;
        $self->urls = $urls;
        $self->date = $date;

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
        if (isset($data['photographer'])) {
            $self->photographer = $data['photographer'];
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

        return $self;
    }
}
