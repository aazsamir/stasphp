<?php

declare(strict_types=1);

use Aazsamir\Stasphp\Infra\Logger;
use Aazsamir\Stasphp\Scraper\Decorator\LoggingScraper;
use Aazsamir\Stasphp\Scraper\ScraperRunner;
use Aazsamir\Stasphp\Scraper\ScrapType;
use Stasphp\Scrapers\Digikam\DigikamScraper;

require __DIR__ . '/../vendor/autoload.php';

if ($argc < 2) {
    fwrite(STDERR, "Usage: php scrapers/scrap.php <mode> [json-data]\n");
    exit(1);
}

$mode = $argv[1] ?? null;
$jsonInput = $argv[2] ?? null;

$scraper = new DigikamScraper();
$scrapr = new LoggingScraper(
    $scraper,
    Logger::default(),
);

$instance = new ScraperRunner(
    $scraper,
    $scraper,
);

$type = ScrapType::fromString($mode);
$input = $jsonInput ?? file_get_contents('php://stdin');

if ($input === '') {
    $input = '{}';
}

$instance->runFromJsonString($type, $input);
