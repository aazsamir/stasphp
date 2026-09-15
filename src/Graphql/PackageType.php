<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

enum PackageType: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case Scraper = 'Scraper';
    case Plugin = 'Plugin';
}
