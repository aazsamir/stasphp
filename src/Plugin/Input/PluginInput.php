<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin\Input;

readonly class PluginInput
{
    public function __construct(
        public ServerConnection $serverConnection,
        public array $args,
    ) {}

    public static function fromArray(array $data): self
    {
        $serverConnection = $data['server_connection'] ?? [];

        return new self(
            serverConnection: new ServerConnection(
                scheme: $serverConnection['scheme'] ?? '',
                port: $serverConnection['port'] ?? 0,
                sessionCookie: new SessionCookie(
                    name: $serverConnection['session_cookie']['name'] ?? null,
                    value: $serverConnection['session_cookie']['value'] ?? null,
                    path: $serverConnection['session_cookie']['path'] ?? null,
                    domain: $serverConnection['session_cookie']['domain'] ?? null,
                    expires: $serverConnection['session_cookie']['expires'] ? new \DateTimeImmutable($serverConnection['session_cookie']['expires']) : null,
                    rawExpires: $serverConnection['session_cookie']['raw_expires'] ?? null,
                    maxAge: $serverConnection['session_cookie']['max_age'] ?? null,
                    secure: $serverConnection['session_cookie']['secure'] ?? null,
                    httpOnly: $serverConnection['session_cookie']['http_only'] ?? null,
                    sameSite: $serverConnection['session_cookie']['same_site'] ?? null,
                    raw: $serverConnection['session_cookie']['raw'] ?? null,
                    unparsed: $serverConnection['session_cookie']['unparsed'] ?? null,
                ),
                dir: $serverConnection['dir'] ?? '',
                unparsed: $serverConnection['unparsed'] ?? null,
            ),
            args: $data['args'] ?? []
        );
    }
}
