<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Tests\Scraper\Input;

use Aazsamir\Stasphp\Scraper\Input\SceneByFragment;
use PHPUnit\Framework\TestCase;

final class ScrapInputTest extends TestCase
{
    public function testFromArrayParsesUrlAndArgs(): void
    {
        $input = SceneByFragment::fromArray([
            'url' => 'https://example.com',
            'args' => [
                'limit' => 10,
            ],
            'server_connection' => [
                'scheme' => 'https',
                'port' => 443,
                'dir' => '/srv/stash',
            ],
        ]);

        self::assertSame('https://example.com', $input->url);
        self::assertSame(['limit' => 10], $input->args);
        self::assertSame('https', $input->serverConnection->scheme);
        self::assertSame(443, $input->serverConnection->port);
        self::assertSame('/srv/stash', $input->serverConnection->dir);
    }
}