<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Tests\Plugin;

use Aazsamir\Stasphp\Plugin\Input\PluginInput;
use Aazsamir\Stasphp\Plugin\Plugin;
use Aazsamir\Stasphp\Plugin\PluginOutput;
use Aazsamir\Stasphp\Plugin\PluginRunner;
use PHPUnit\Framework\TestCase;

final class PluginRunnerTest extends TestCase
{
    public function testRunFromJsonStringWritesPluginOutput(): void
    {
        $runner = new PluginRunner(new class implements Plugin {
            public function run(PluginInput $input): ?PluginOutput
            {
                return PluginOutput::success('ok');
            }
        });

        \ob_start();
        $runner->runFromJsonString('{"server_connection":{},"args":{}}');
        $raw = \ob_get_clean();

        self::assertIsString($raw);
        self::assertSame('{"output":"ok"}' . "\n", $raw);
    }

    public function testRunFromJsonStringHandlesInvalidJson(): void
    {
        $runner = new PluginRunner(new class implements Plugin {
            public function run(PluginInput $input): ?PluginOutput
            {
                return null;
            }
        });

        \ob_start();
        $runner->runFromJsonString('{bad json');
        $raw = \ob_get_clean();

        self::assertIsString($raw);
        self::assertSame('{"error":"Invalid input JSON."}' . "\n", $raw);
    }
}