<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Plugin;

use Aazsamir\Stasphp\Plugin\Input\PluginInput;

interface Plugin
{
    public function run(PluginInput $input): ?PluginOutput;
}