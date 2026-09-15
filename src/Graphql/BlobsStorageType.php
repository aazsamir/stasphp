<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

enum BlobsStorageType: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case DATABASE = 'DATABASE';
    case FILESYSTEM = 'FILESYSTEM';
}
