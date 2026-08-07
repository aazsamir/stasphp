<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Tests\Scraper;

use Aazsamir\Stasphp\Scraper\Input\ScrapInput;
use Aazsamir\Stasphp\Scraper\Scraper;
use Aazsamir\Stasphp\Scraper\ScraperOutput;
use Aazsamir\Stasphp\Scraper\ScraperRunner;
use PHPUnit\Framework\TestCase;

final class ScraperRunnerTest extends TestCase
{
    public function testRunWritesStructuredOutput(): void
    {
        $runner = new ScraperRunner(new class implements Scraper {
            public function scrape(ScrapInput $input): ?ScraperOutput
            {
                return ScraperOutput::success([
                    ['title' => 'scene 1'],
                ]);
            }
        });

        \ob_start();
        $runner->run([
            'server_connection' => [],
            'url' => 'https://example.com',
            'args' => [],
        ]);
        $raw = \ob_get_clean();

        self::assertIsString($raw);
        self::assertSame('{"output":[{"title":"scene 1"}]}' . "\n", $raw);
    }
}