<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin;

use Aazsamir\Stasphp\Plugin\Input\PluginInput;

class PluginRunner
{
    public function __construct(
        private Plugin $plugin,
    ) {}

    public function run(array $stdin): void
    {
        $input = PluginInput::fromArray($stdin);
        $output = $this->plugin->run($input);

        $this->writeOutput($output);
    }

    private function writeOutput(?PluginOutput $output): void
    {
        $json = [];

        if ($output?->error) {
            $json['error'] = $output->error;
        }

        if ($output?->output) {
            $json['output'] = $output->output;
        }

        echo \json_encode($json);
    }
}
