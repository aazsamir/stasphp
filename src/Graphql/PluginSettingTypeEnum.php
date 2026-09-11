<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum PluginSettingTypeEnum: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case STRING = 'STRING';
    case NUMBER = 'NUMBER';
    case BOOLEAN = 'BOOLEAN';
}
