<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin\Input;

readonly class SessionCookie
{
    public function __construct(
        public ?string $name,
        public ?string $value,
        public ?string $path,
        public ?string $domain,
        public ?\DateTimeImmutable $expires,
        public ?string $rawExpires,
        public ?int $maxAge,
        public ?bool $secure,
        public ?bool $httpOnly,
        public ?int $sameSite,
        public ?string $raw,
        public mixed $unparsed,
    ) {}
}
