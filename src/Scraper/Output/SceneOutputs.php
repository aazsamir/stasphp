<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper\Output;

class SceneOutputs
{
    /**
     * @var SceneOutput[] $scenes
     */
    private(set) array $scenes = [];

    public function __construct(
        SceneOutput ...$scenes,
    ) {
        $this->scenes = $scenes;
    }

    public function toArray(): array
    {
        return array_map(fn($x) => $x->toArray(), $this->scenes);
    }
}
