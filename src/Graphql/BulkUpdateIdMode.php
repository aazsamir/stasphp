<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum BulkUpdateIdMode: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case SET = 'SET';
    case ADD = 'ADD';
    case REMOVE = 'REMOVE';
}
