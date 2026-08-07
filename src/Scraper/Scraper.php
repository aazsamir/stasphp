<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

use Aazsamir\Stasphp\Scraper\Input\ScrapInput;

interface Scraper
{
    public function scrape(ScrapInput $input): ?ScraperOutput;
}