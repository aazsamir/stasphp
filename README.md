# stasphp

PHP SDK for building StashApp plugins, scrapers and interacting with graphql api.

## Installation

```bash
composer require aazsamir/stasphp
```

## Plugin

Create a plugin
```php
<?php
class MyPlugin implements Plugin
{
    public function run(PluginInput $input): ?PluginOutput
    {
        /* ... */
        return new PluginOutput(output: 'Done!');
    }
}

```

Create entrypoint
```php
<?php
// plugin.php
require __DIR__ . '/vendor/autoload.php';

$input = file_get_contents('php://stdin');
$input = PluginInput::fromString($input);
$plugin = new MyPlugin();
$runner = new PluginRunner($plugin, null);
$runner->run($input);
```

And add plugin configuration in stash `plugins` directory
```yaml
name: MyPlugin
exec:
  - php
  - "/home/user/my_plugin/plugin.php"
interface: raw
tasks:
  - name: "Run MyPlugin"
```

## Scraper

Create a scraper
```php
<?php
class MyScraper implements ScraperByName
{
    public function scrapeByName(SceneByName $input): ?SceneOutputs
    {
        /* ... */
        return new SceneOutputs(
            new SceneOutput(
                title: 'scraped title'
                rating: 80,
                tags: ['amazing'],
            ),
        );
    }
}
```

Create entrypoint
```php
<?php
// scrap.php
require __DIR__ . '/vendor/autoload.php';

$scraper = new MyScraper();
$runner = new ScraperRunner(scraperByName: $scraper);
$type = $argv[1] ?? null;
$type = ScrapType::fromString($type);
$input = file_get_contents('php://stdin');
$runner->runFromJsonString($type, $input);
```

And add scraper configuration in stash `scrapers` directory
```yaml
name: MyScraper
sceneByName:
  action: script
  script:
    - php
    - /home/user/my_scraper/scrap.php
    - sceneByName
```

## GraphQL

```php
<?php
$api = new Api(new GraphqlClient(
    new Client(),
    new ConnArgs('http://localhost:9999/graphql'),
    new QueryBuilder(),
));

$result = $api->findScene(id: '123')
    ->selector(fn ($x) => $x->select(
        Scene::id(),
        Scene::title(),
    ))
    ->do();
```

> **Note:** GraphQL client is fully generated from graphql schema using my other library [aazsamir/graphpql](https://github.com/aazsamir/graphpql)




## License

This project is licensed under the MIT License.