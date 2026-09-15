<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScraperSpec implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $urls;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapeType> */
    public array $supported_scrapes;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScraperSpecField<mixed>
     */
    public static function urls(): Fields\ScraperSpecField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScraperSpecField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScraperSpecField<mixed>
     */
    public static function supported_scrapes(): Fields\ScraperSpecField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScraperSpecField::supported_scrapes();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapeType> $supported_scrapes
     * @param array<string> $urls
     */
    public static function new(array $supported_scrapes, ?array $urls = null): self
    {
        $self = new self();
        $self->supported_scrapes = $supported_scrapes;
        $self->urls = $urls;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['supported_scrapes'])) {
            $self->supported_scrapes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapeType::from($data);
            }, $data['supported_scrapes'] ?? []);
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }

        return $self;
    }
}
