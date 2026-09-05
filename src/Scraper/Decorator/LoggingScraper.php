<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper\Decorator;

use Aazsamir\Stasphp\Scraper\Input\SceneByFragment;
use Aazsamir\Stasphp\Scraper\Input\SceneByName;
use Aazsamir\Stasphp\Scraper\ScraperByFragment;
use Aazsamir\Stasphp\Scraper\ScraperByName;
use Aazsamir\Stasphp\Scraper\ScraperOutput;
use Psr\Log\LoggerInterface;

class LoggingScraper implements ScraperByFragment, ScraperByName
{
    public function __construct(
        private ScraperByFragment|ScraperByName $decorated,
        private LoggerInterface $logger,
    ) {}

    public function scrapeByFragment(SceneByFragment $input): ?ScraperOutput
    {
        return $this->catchAndLog(fn() => $this->decorated->scrapeByFragment($input), '[scrap] scrapeByFragment');
    }

    public function scrapeByName(SceneByName $input): ?ScraperOutput
    {
        return $this->catchAndLog(fn() => $this->decorated->scrapeByName($input), '[scrap] scrapeByName');
    }

    private function catchAndLog(\Closure $closure, string $context): mixed
    {
        $this->logger->info($context . ' started');

        try {
            $return = $closure();

            $this->logger->info($context . ' completed');

            return $return;
        } catch (\Throwable $e) {
            $this->logger->error($context . ' failed', ['error' => $e->getMessage()]);

            throw $e;
        }
    }
}
