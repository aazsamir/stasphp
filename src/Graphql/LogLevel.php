<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum LogLevel: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case Trace = 'Trace';
    case Debug = 'Debug';
    case Info = 'Info';
    case Progress = 'Progress';
    case Warning = 'Warning';
    case Error = 'Error';
}
