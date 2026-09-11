<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum CircumcisedEnum: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case CUT = 'CUT';
    case UNCUT = 'UNCUT';
}
