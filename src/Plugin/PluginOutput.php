<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin;

readonly class PluginOutput
{
    public function __construct(
        public ?string $error,
        public ?string $output,
    ) {}
}
