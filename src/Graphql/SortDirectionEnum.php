<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

enum SortDirectionEnum: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case ASC = 'ASC';
    case DESC = 'DESC';
}
