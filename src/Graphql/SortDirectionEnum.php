<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum SortDirectionEnum: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case ASC = 'ASC';
    case DESC = 'DESC';
}
