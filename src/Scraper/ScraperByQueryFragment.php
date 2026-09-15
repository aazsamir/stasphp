<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

use Aazsamir\Stasphp\Scraper\Input\SceneByQueryFragment;
use Aazsamir\Stasphp\Scraper\Output\SceneOutput;

interface ScraperByQueryFragment
{
    public function scrapeByQueryFragment(SceneByQueryFragment $input): ?SceneOutput;
}