<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Tests\Plugin\Input;

use Aazsamir\Stasphp\Plugin\Input\PluginInput;
use PHPUnit\Framework\TestCase;

final class PluginInputTest extends TestCase
{
    public function testFromArrayParsesKnownFields(): void
    {
        $input = PluginInput::fromArray([
            'server_connection' => [
                'scheme' => 'http',
                'port' => '9999',
                'dir' => '/tmp/stash',
                'session_cookie' => [
                    'name' => 'session',
                    'value' => 'abc123',
                    'expires' => '2026-01-01T00:00:00+00:00',
                    'max_age' => '100',
                    'same_site' => 'Lax',
                ],
            ],
            'args' => [
                'mode' => 'full',
            ],
        ]);

        self::assertSame('http', $input->serverConnection->scheme);
        self::assertSame(9999, $input->serverConnection->port);
        self::assertSame('/tmp/stash', $input->serverConnection->dir);
        self::assertSame('session', $input->serverConnection->sessionCookie->name);
        self::assertSame('abc123', $input->serverConnection->sessionCookie->value);
        self::assertSame(100, $input->serverConnection->sessionCookie->maxAge);
        self::assertSame('Lax', $input->serverConnection->sessionCookie->sameSite);
        self::assertSame(['mode' => 'full'], $input->args);
        self::assertNotNull($input->serverConnection->sessionCookie->expires);
    }

    public function testFromArrayHandlesInvalidPayloadTypesSafely(): void
    {
        $input = PluginInput::fromArray([
            'server_connection' => 'invalid',
            'args' => 'invalid',
        ]);

        self::assertSame('', $input->serverConnection->scheme);
        self::assertSame(0, $input->serverConnection->port);
        self::assertSame([], $input->args);
    }
}