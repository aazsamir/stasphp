<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

use Aazsamir\Stasphp\Scraper\Input\SceneByFragment;
use Aazsamir\Stasphp\Scraper\Input\SceneByName;
use Aazsamir\Stasphp\Scraper\Input\SceneByQueryFragment;
use Aazsamir\Stasphp\Scraper\Output\SceneOutput;
use Aazsamir\Stasphp\Scraper\Output\SceneOutputs;
use Psr\Log\LoggerInterface;

class ScraperRunner
{
    public function __construct(
        private ?ScraperByFragment $scraperByFragment = null,
        private ?ScraperByName $scraperByName = null,
        private ?ScraperByQueryFragment $scraperByQueryFragment = null,
        private ?LoggerInterface $logger = null,
    ) {}

    public function runFromJsonString(ScrapType $type, string $json): void
    {
        $this->logger?->debug('[scrap] start', ['input' => $json]);

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
            ScrapType::SceneByQueryFragment => SceneByQueryFragment::fromArray($stdin),
        };

        try {
            $output = match ($type) {
                ScrapType::SceneByFragment => $this->scraperByFragment->scrapeByFragment($input),
                ScrapType::SceneByName => $this->scraperByName->scrapeByName($input),
                ScrapType::SceneByQueryFragment => $this->scraperByQueryFragment->scrapeByQueryFragment($input),
            };
            $this->writeOutput($output);
        } catch (\Throwable $exception) {
            echo json_encode(['error' => $exception->getMessage()]) . "\n";
        }
    }

    private function writeOutput(null|SceneOutput|SceneOutputs $output): void
    {
        $json = $output?->toArray() ?? [];

        try {
            echo \json_encode($json, \JSON_THROW_ON_ERROR) . "\n";
        } catch (\JsonException) {
            echo json_encode(['error' => 'Failed to encode output JSON.']) . "\n";
        }
    }
}