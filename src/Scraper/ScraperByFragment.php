<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

use Aazsamir\Stasphp\Scraper\Input\SceneByFragment;
use Aazsamir\Stasphp\Scraper\Output\SceneOutput;

interface ScraperByFragment
{
    public function scrapeByFragment(SceneByFragment $input): ?SceneOutput;
}