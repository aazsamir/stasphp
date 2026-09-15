<?php

declare(strict_types=1);

use Aazsamir\Graphpql\Client\ConnArgs;
use Aazsamir\Graphpql\Client\SchemaClient;
use Aazsamir\Graphpql\GraphqlGenerator;
use GuzzleHttp\Client;

require __DIR__ . "/vendor/autoload.php";

$client = new SchemaClient(
    new Client(),
);

$schema = $client->fetchSchema(
    new ConnArgs(
        endpoint: 'http://localhost:9999/graphql',
    ),
);

// dd($schema->findType('VideoFile'));

$generator = GraphqlGenerator::default();
$generator->generate(
    $schema,
    '\\Aazsamir\\Stasphp\\Graphql',
    __DIR__ . '/src/Graphql',
);
