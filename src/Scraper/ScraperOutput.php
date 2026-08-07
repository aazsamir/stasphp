<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

readonly class ScraperOutput
{
    /**
     * @param array<int, array<string, mixed>>|null $output
     */
    public function __construct(
        public ?string $error,
        public ?array $output,
    ) {}

    /**
     * @param array<int, array<string, mixed>> $output
     */
    public static function success(array $output): self
    {
        return new self(error: null, output: $output);
    }

    public static function error(string $error): self
    {
        return new self(error: $error, output: null);
    }

    public function toArray(): array
    {
        $json = [];

        if ($this->error !== null && $this->error !== '') {
            $json['error'] = $this->error;
        }

        if ($this->output !== null) {
            $json['output'] = $this->output;
        }

        return $json;
    }
}