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
        public ?string $sameSite,
        public ?string $raw,
        public mixed $unparsed,
    ) {}

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'value' => $this->value,
            'path' => $this->path,
            'domain' => $this->domain,
            'expires' => $this->expires?->format(\DateTimeImmutable::ATOM),
            'rawExpires' => $this->rawExpires,
            'maxAge' => $this->maxAge,
            'secure' => $this->secure,
            'httpOnly' => $this->httpOnly,
            'sameSite' => $this->sameSite,
            'raw' => $this->raw,
            'unparsed' => $this->unparsed,
        ];
    }
}
