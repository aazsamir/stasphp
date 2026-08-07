<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper\Input;

use Aazsamir\Stasphp\Plugin\Input\ServerConnection;
use Aazsamir\Stasphp\Plugin\Input\SessionCookie;

readonly class ScrapInput
{
    /**
     * @param array<string, mixed> $args
     */
    public function __construct(
        public ServerConnection $serverConnection,
        public string $url,
        public array $args,
    ) {}

    public static function fromArray(array $data): self
    {
        $serverConnection = self::asArray($data['server_connection'] ?? []);
        $sessionCookie = self::asArray($serverConnection['session_cookie'] ?? []);

        return new self(
            serverConnection: new ServerConnection(
                scheme: self::asString($serverConnection['scheme'] ?? ''),
                port: self::asInt($serverConnection['port'] ?? 0),
                sessionCookie: new SessionCookie(
                    name: self::asNullableString($sessionCookie['name'] ?? null),
                    value: self::asNullableString($sessionCookie['value'] ?? null),
                    path: self::asNullableString($sessionCookie['path'] ?? null),
                    domain: self::asNullableString($sessionCookie['domain'] ?? null),
                    expires: self::asNullableDateTime($sessionCookie['expires'] ?? null),
                    rawExpires: self::asNullableString($sessionCookie['raw_expires'] ?? null),
                    maxAge: self::asNullableInt($sessionCookie['max_age'] ?? null),
                    secure: self::asNullableBool($sessionCookie['secure'] ?? null),
                    httpOnly: self::asNullableBool($sessionCookie['http_only'] ?? null),
                    sameSite: self::asNullableString($sessionCookie['same_site'] ?? null),
                    raw: self::asNullableString($sessionCookie['raw'] ?? null),
                    unparsed: $sessionCookie['unparsed'] ?? null,
                ),
                dir: self::asString($serverConnection['dir'] ?? ''),
                unparsed: $serverConnection['unparsed'] ?? null,
            ),
            url: self::asString($data['url'] ?? ''),
            args: self::asArray($data['args'] ?? []),
        );
    }

    private static function asArray(mixed $value): array
    {
        return \is_array($value) ? $value : [];
    }

    private static function asString(mixed $value): string
    {
        return \is_string($value) ? $value : '';
    }

    private static function asNullableString(mixed $value): ?string
    {
        return \is_string($value) ? $value : null;
    }

    private static function asInt(mixed $value): int
    {
        if (\is_int($value)) {
            return $value;
        }

        return \is_numeric($value) ? (int) $value : 0;
    }

    private static function asNullableInt(mixed $value): ?int
    {
        if ($value === null) {
            return null;
        }

        if (\is_int($value)) {
            return $value;
        }

        return \is_numeric($value) ? (int) $value : null;
    }

    private static function asNullableBool(mixed $value): ?bool
    {
        return \is_bool($value) ? $value : null;
    }

    private static function asNullableDateTime(mixed $value): ?\DateTimeImmutable
    {
        if (!\is_string($value) || $value === '') {
            return null;
        }

        try {
            return new \DateTimeImmutable($value);
        } catch (\Exception) {
            return null;
        }
    }
}
