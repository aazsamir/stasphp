<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

enum OrientationEnum: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case LANDSCAPE = 'LANDSCAPE';
    case PORTRAIT = 'PORTRAIT';
    case SQUARE = 'SQUARE';
}
