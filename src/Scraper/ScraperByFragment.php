<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

use Aazsamir\Stasphp\Scraper\Input\SceneByFragment;

interface ScraperByFragment
{
    public function scrapeByFragment(SceneByFragment $input): ?ScraperOutput;
}