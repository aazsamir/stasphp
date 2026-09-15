<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper\Output;

readonly class SceneOutput
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
