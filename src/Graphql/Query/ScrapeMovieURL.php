<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Query;

/**
 * @deprecated Use scrapeGroupURL instead
 */
class ScrapeMovieURL implements \Aazsamir\Graphpql\Model\Query
{
    public const NAME = 'scrapeMovieURL';
    public const RETURN_TYPE = '\Aazsamir\Stasphp\Graphql\ScrapedMovie';

    private \Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedMovieSelectionSet $selection;
    private \Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient;

    public static function getName(): string
    {
        return self::NAME;
    }

    public static function getReturnType(): string
    {
        return self::RETURN_TYPE;
    }

    public function __construct(
        public string $url,
    ) {
    }

    public function getVars(): array
    {
        return [
            'url' => $this->url,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedMovieSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedMovieSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedMovieSelectionSet $selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedMovieSelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    public function do(): ?\Aazsamir\Stasphp\Graphql\ScrapedMovie
    {
        $response = $this->graphqlClient->request($this);

        if ($response->data === null) {
            return null;
        }

        $returnType = self::getReturnType();

        return $returnType::fromArray($response->data);
    }

    public function dd(): never
    {
        $content = new \Aazsamir\Graphpql\Client\QueryBuilder()->fromOperation($this);

        if (function_exists('dd')) {
            dd($content);
        }

        echo "<pre><br>
        ";
        echo($content);
        echo "</pre><br>
        ";
        exit(1);
    }
}
