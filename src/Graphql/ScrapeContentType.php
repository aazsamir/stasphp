<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

enum ScrapeContentType: string implements \Aazsamir\Graphpql\Model\GraphEnum
{
    case GALLERY = 'GALLERY';
    case IMAGE = 'IMAGE';
    case MOVIE = 'MOVIE';
    case GROUP = 'GROUP';
    case PERFORMER = 'PERFORMER';
    case SCENE = 'SCENE';
}
