<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

enum IdentifyFieldStrategy: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case IGNORE = 'IGNORE';
    case MERGE = 'MERGE';
    case OVERWRITE = 'OVERWRITE';
}
