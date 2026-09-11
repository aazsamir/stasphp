<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum OrientationEnum: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case LANDSCAPE = 'LANDSCAPE';
    case PORTRAIT = 'PORTRAIT';
    case SQUARE = 'SQUARE';
}
