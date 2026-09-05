<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

readonly class ScraperOutput
{
    public function __construct(
        public ?string $title,
        public ?int $rating,
        public ?array $tags = null,
    ) {}

    public function toArray(): array
    {
        $vars = get_object_vars($this);
        
        return \array_filter($vars, fn($value) => $value !== null);
    }
}
