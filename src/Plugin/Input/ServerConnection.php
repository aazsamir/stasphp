<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin\Input;

readonly class ServerConnection
{
    public function __construct(
        public string $scheme,
        public int $port,
        public string $host,
        public SessionCookie $sessionCookie,
        public string $dir,
        public mixed $unparsed,
    ) {}

    public function graphqlEndpoint(): string
    {
        return $this->scheme . '://' . $this->host . ':' . $this->port . '/graphql';
    }

    public function toArray(): array
    {
        return [
            'scheme' => $this->scheme,
            'host' => $this->scheme,
            'port' => $this->scheme,
            'sessionCookie' => $this->sessionCookie->toArray(),
            'dir' => $this->dir,
            'unparsed' => $this->unparsed,
        ];
    }
}
