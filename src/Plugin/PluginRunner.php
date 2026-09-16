<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin;

use Aazsamir\Stasphp\Plugin\Input\PluginInput;
use Psr\Log\LoggerInterface;

class PluginRunner
{
    public function __construct(
        private Plugin $plugin,
        private ?LoggerInterface $logger = null,
    ) {}

    public function run(PluginInput $input): void
    {
        $this->logger?->info('[plugin] started');
        $this->logger?->debug('[plugin] input', ['input' => $input->toArray()]);

        try {
            $output = $this->plugin->run($input);
            $this->writeOutput($output);
        } catch (\Throwable $exception) {
            if ((int) getenv('DEBUG')) {
                throw $exception;
            }

            $this->logger?->warning('[plugin] error', [
                'error' => $exception->getMessage(),
            ]);
            $this->writeOutput(PluginOutput::error($exception->getMessage()));
        }
    }

    private function writeOutput(?PluginOutput $output): void
    {
        $json = $output?->toArray() ?? [];

        try {
            echo \json_encode($json, \JSON_THROW_ON_ERROR) . "\n";
        } catch (\JsonException) {
            echo '{"error":"Failed to encode output JSON."}' . "\n";
        }
    }
}
