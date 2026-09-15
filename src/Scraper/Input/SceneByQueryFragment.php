<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper\Input;

readonly class SceneByQueryFragment
{
    public function __construct(
        public ?string $title,
        public ?string $code,
        public mixed $details,
        public ?string $director,
        public ?string $url,
        public ?array $urls,
        public ?string $date,
        public ?string $remoteSiteId,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            $data['title'],
            $data['code'],
            $data['details'],
            $data['director'],
            $data['url'],
            $data['urls'],
            $data['date'],
            $data['remote_site_id'],
        );
    }
}
