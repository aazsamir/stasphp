<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin;

readonly class PluginOutput
{
    public function __construct(
        public ?string $error = null,
        public ?string $output = null,
    ) {}

    public static function success(string $output): self
    {
        return new self(error: null, output: $output);
    }

    public static function error(string $error): self
    {
        return new self(error: $error, output: null);
    }

    public function toArray(): array
    {
        $json = [];

        if ($this->error !== null && $this->error !== '') {
            $json['error'] = $this->error;
        }

        if ($this->output !== null && $this->output !== '') {
            $json['output'] = $this->output;
        }

        return $json;
    }
}
