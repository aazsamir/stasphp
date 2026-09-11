<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum IdentifyFieldStrategy: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case IGNORE = 'IGNORE';
    case MERGE = 'MERGE';
    case OVERWRITE = 'OVERWRITE';
}
