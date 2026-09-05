<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

use Aazsamir\Stasphp\Scraper\Input\SceneByName;

interface ScraperByName
{
    public function scrapeByName(SceneByName $input): ?ScraperOutput;
}