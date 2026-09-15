<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Query;

class ScrapeURL implements \Aazsamir\Graphpql\Model\Query
{
    public const NAME = 'scrapeURL';

    private \Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedContentSelectionSet $selection;
    private \Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient;

    public static function getName(): string
    {
        return self::NAME;
    }

    public function __construct(
        public string $url,
        public \Aazsamir\Stasphp\Graphql\ScrapeContentType $ty,
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
     * @param callable(\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedContentSelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedContentSelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedContentSelectionSet $selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedContentSelectionSet
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
    ): \Aazsamir\Stasphp\Graphql\ScrapedStudio|\Aazsamir\Stasphp\Graphql\ScrapedTag|\Aazsamir\Stasphp\Graphql\ScrapedScene|\Aazsamir\Stasphp\Graphql\ScrapedGallery|\Aazsamir\Stasphp\Graphql\ScrapedImage|\Aazsamir\Stasphp\Graphql\ScrapedMovie|\Aazsamir\Stasphp\Graphql\ScrapedGroup|\Aazsamir\Stasphp\Graphql\ScrapedPerformer|null {
        $response = $this->graphqlClient->request($this);

        if ($response->data === null) {
            return null;
        }

        return ($response->data['__typename'] ?? '') === 'ScrapedStudio'
                ? (\Aazsamir\Stasphp\Graphql\ScrapedStudio::fromArray($response->data))
                : (($response->data['__typename'] ?? '') === 'ScrapedTag'
                    ? (\Aazsamir\Stasphp\Graphql\ScrapedTag::fromArray($response->data))
                    : (($response->data['__typename'] ?? '') === 'ScrapedScene'
                        ? (\Aazsamir\Stasphp\Graphql\ScrapedScene::fromArray($response->data))
                        : (($response->data['__typename'] ?? '') === 'ScrapedGallery'
                            ? (\Aazsamir\Stasphp\Graphql\ScrapedGallery::fromArray($response->data))
                            : (($response->data['__typename'] ?? '') === 'ScrapedImage'
                                ? (\Aazsamir\Stasphp\Graphql\ScrapedImage::fromArray($response->data))
                                : (($response->data['__typename'] ?? '') === 'ScrapedMovie'
                                    ? (\Aazsamir\Stasphp\Graphql\ScrapedMovie::fromArray($response->data))
                                    : (($response->data['__typename'] ?? '') === 'ScrapedGroup'
                                        ? (\Aazsamir\Stasphp\Graphql\ScrapedGroup::fromArray($response->data))
                                        : (($response->data['__typename'] ?? '') === 'ScrapedPerformer'
                                            ? (\Aazsamir\Stasphp\Graphql\ScrapedPerformer::fromArray($response->data))
                                            : (null))))))));
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
