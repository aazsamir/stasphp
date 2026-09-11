<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\Query;

class ScrapeSingleGallery implements \Aazsamir\Graphpql\Model\Query
{
    public const NAME = 'scrapeSingleGallery';
    public const RETURN_TYPE = '\Aazsamir\Stasphp\Graphpql\ScrapedGallery';

    private \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedGallerySelectionSet $selection;
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
        public \Aazsamir\Stasphp\Graphpql\ScraperSourceInput $source,
        public \Aazsamir\Stasphp\Graphpql\ScrapeSingleGalleryInput $input,
    ) {
    }

    public function getVars(): array
    {
        return [
            'source' => $this->source,
            'input' => $this->input,
        ];
    }

    /**
     * @param callable(\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedGallerySelectionSet): void $selection
     */
    public function selector(callable $selection): self
    {
        if (!isset($this->child)) {
            $this->selection = \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedGallerySelectionSet::new();
        }

        $selection($this->selection);

        return $this;
    }

    public function setSelection(\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedGallerySelectionSet $selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    public function getSelectionSet(): \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedGallerySelectionSet
    {
        return isset($this->selection) ? $this->selection : new \Aazsamir\Graphpql\Model\NullSelectionSet;
    }

    public function withClient(\Aazsamir\Graphpql\Client\GraphqlClient $graphqlClient): self
    {
        $clone = clone $this;
        $clone->graphqlClient = $graphqlClient;

        return $clone;
    }

    /**
     * @return array<\Aazsamir\Stasphp\Graphpql\ScrapedGallery>
     */
    public function do(): ?array
    {
        $response = $this->graphqlClient->request($this);

        if ($response->data === null) {
            return null;
        }

        $returnType = self::getReturnType();

        return array_map(fn ($x) => $returnType::fromArray($x), $response->data);
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
