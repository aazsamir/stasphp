# stasphp

PHP SDK for building StashApp plugins and scrapers.

## Installation

```bash
composer require aazsamir/stasphp
```

## Plugin Example

```php
<?php

declare(strict_types=1);

use Aazsamir\Stasphp\Plugin\Input\PluginInput;
use Aazsamir\Stasphp\Plugin\Plugin;
use Aazsamir\Stasphp\Plugin\PluginOutput;
use Aazsamir\Stasphp\Plugin\PluginRunner;

final class HealthPlugin extends Plugin
{
    public function run(PluginInput $input): ?PluginOutput
    {
        return PluginOutput::success('ok');
    }
}

$runner = new PluginRunner(new HealthPlugin());
$runner->runFromJsonString(file_get_contents('php://stdin') ?: '{}');
```

## Scraper Example

```php
<?php

declare(strict_types=1);

use Aazsamir\Stasphp\Scraper\Input\ScrapInput;
use Aazsamir\Stasphp\Scraper\Scraper;
use Aazsamir\Stasphp\Scraper\ScraperOutput;
use Aazsamir\Stasphp\Scraper\ScraperRunner;

final class ExampleScraper extends Scraper
{
    public function scrape(ScrapInput $input): ?ScraperOutput
    {
        return ScraperOutput::success([
            ['title' => 'Example', 'url' => $input->url],
        ]);
    }
}

$runner = new ScraperRunner(new ExampleScraper());
$runner->runFromJsonString(file_get_contents('php://stdin') ?: '{}');
```

## Runtime Contracts

- Input payloads should be JSON objects.
- Plugin result shape: `{"error":"..."}` or `{"output":"..."}`.
- Scraper result shape: `{"error":"..."}` or `{"output":[...]}`.
- Runners always print a single JSON line to stdout.

## Development

```bash
composer install
composer test
composer lint
```