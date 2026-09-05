<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

use Aazsamir\Stasphp\Infra\Logger;
use Aazsamir\Stasphp\Scraper\Input\SceneByFragment;
use Aazsamir\Stasphp\Scraper\Input\SceneByName;

class ScraperRunner
{
    public function __construct(
        private ?ScraperByFragment $scraperByFragment = null,
        private ?ScraperByName $scraperByName = null,
    ) {}

    public function runFromJsonString(ScrapType $type, string $json): void
    {
        Logger::default()->debug('json', ['json' => $json, 'args' => $_SERVER['argv'] ?? []]);

        try {
            $decoded = \json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            echo json_encode(['error' => 'Failed to decode input JSON.']) . "\n";
            return;
        }

        if (!\is_array($decoded)) {
            echo json_encode(['error' => 'Input JSON is not an array.']) . "\n";
            return;
        }

        $this->run($type, $decoded);
    }

    public function run(ScrapType $type, array $stdin): void
    {
        $input = match ($type) {
            ScrapType::SceneByFragment => SceneByFragment::fromArray($stdin),
            ScrapType::SceneByName => SceneByName::fromArray($stdin),
        };

        try {
            $output = match ($type) {
                ScrapType::SceneByFragment => $this->scraperByFragment->scrapeByFragment($input),
                ScrapType::SceneByName => $this->scraperByName->scrapeByName($input),
            };
            $this->writeOutput($output);
        } catch (\Throwable $exception) {
            echo json_encode(['error' => $exception->getMessage()]) . "\n";
        }
    }

    private function writeOutput(?ScraperOutput $output): void
    {
        $json = $output?->toArray() ?? [];

        try {
            echo \json_encode($json, \JSON_THROW_ON_ERROR) . "\n";
        } catch (\JsonException) {
            echo json_encode(['error' => 'Failed to encode output JSON.']) . "\n";
        }
    }
}