<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

enum HashAlgorithm: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case MD5 = 'MD5';
    case OSHASH = 'OSHASH';
}
