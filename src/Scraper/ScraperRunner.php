<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

use Aazsamir\Stasphp\Scraper\Input\ScrapInput;

class ScraperRunner
{
    public function __construct(
        private Scraper $scraper,
    ) {}

    public function run(array $stdin): void
    {
        try {
            $input = ScrapInput::fromArray($stdin);
            $output = $this->scraper->scrape($input);
            $this->writeOutput($output);
        } catch (\Throwable $exception) {
            $this->writeOutput(ScraperOutput::error($exception->getMessage()));
        }
    }

    public function runFromJsonString(string $json): void
    {
        try {
            $decoded = \json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            $this->writeOutput(ScraperOutput::error('Invalid input JSON.'));
            return;
        }

        if (!\is_array($decoded)) {
            $this->writeOutput(ScraperOutput::error('Input JSON must decode to an object.'));
            return;
        }

        $this->run($decoded);
    }

    private function writeOutput(?ScraperOutput $output): void
    {
        $json = $output?->toArray() ?? [];

        try {
            echo \json_encode($json, \JSON_THROW_ON_ERROR) . "\n";
        } catch (\JsonException) {
            echo '{"error":"Failed to encode output JSON."}' . "\n";
        }
    }
}