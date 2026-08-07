<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin\Input;

readonly class ServerConnection
{
    public function __construct(
        public string $scheme,
        public int $port,
        public SessionCookie $sessionCookie,
        public string $dir,
        public mixed $unparsed,
    ) {}
}
