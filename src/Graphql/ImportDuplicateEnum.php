<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

enum ImportDuplicateEnum: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case IGNORE = 'IGNORE';
    case OVERWRITE = 'OVERWRITE';
    case FAIL = 'FAIL';
}
