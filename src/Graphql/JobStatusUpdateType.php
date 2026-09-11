<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum JobStatusUpdateType: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case ADD = 'ADD';
    case REMOVE = 'REMOVE';
    case UPDATE = 'UPDATE';
}
