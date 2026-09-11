<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\Query;

class ScrapeURL implements \Aazsamir\Graphpql\Model\Query
{
    public const NAME = 'scrapeURL';
    public const RETURN_TYPE = '\Aazsamir\Stasphp\Graphpql\ScrapedStudio|\Aazsamir\Stasphp\Graphpql\ScrapedTag|\Aazsamir\Stasphp\Graphpql\ScrapedScene|\Aazsamir\Stasphp\Graphpql\ScrapedGallery|\Aazsamir\Stasphp\Graphpql\ScrapedImage|\Aazsamir\Stasphp\Graphpql\ScrapedMovie|\Aazsamir\Stasphp\Graphpql\ScrapedGroup|\Aazsamir\Stasphp\Graphpql\ScrapedPerformer';

    private \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedContentSelectionSet $selection;
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
        public \Aazsamir\Stasphp\Graphpql\ScrapeContentType $ty,
    ) {
    }

    public function getVars(): array
    {
        return [
            'url' => $this->url,
            'ty' => $this->ty,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedContentSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedContentSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedContentSelectionSet $selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedContentSelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    public function do(
    ): \Aazsamir\Stasphp\Graphpql\ScrapedStudio|\Aazsamir\Stasphp\Graphpql\ScrapedTag|\Aazsamir\Stasphp\Graphpql\ScrapedScene|\Aazsamir\Stasphp\Graphpql\ScrapedGallery|\Aazsamir\Stasphp\Graphpql\ScrapedImage|\Aazsamir\Stasphp\Graphpql\ScrapedMovie|\Aazsamir\Stasphp\Graphpql\ScrapedGroup|\Aazsamir\Stasphp\Graphpql\ScrapedPerformer|null {
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
