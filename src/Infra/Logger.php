<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Infra;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;
use Stringable;

class Logger implements LoggerInterface
{
    use LoggerTrait;

    private bool $debug = false;

    public function __construct(
        private mixed $stream,
    ) {
        if ($stream == 'dump') {
            $this->debug = true;
        } elseif (\is_string($stream)) {
            $this->stream = fopen($stream, 'a');
        }
    }

    public static function default(): self
    {
        if ($_ENV['DEBUG'] ?? false) {
            return new self('dump');
        }

        return new self(__DIR__ . '/../../var/log.log');
    }

    public function log($level, string|Stringable $message, array $context = []): void
    {
        if ($this->debug) {
            dump([
                'level' => $level,
                'message' => (string)$message,
                'context' => $context,
            ]);
        } else {
            // fwrite($this->stream, (string) $message . PHP_EOL);
            $message = (string) $message;
            $printr = \print_r($context, true);
            $printr = \substr($printr, strlen('Array'));
            $message .= ' ' . $printr;
            fwrite($this->stream, $message . PHP_EOL);
        }
    }
}
