<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper;

enum ScrapType: string
{
    case SceneByFragment = 'scene_by_fragment';
    case SceneByName = 'scene_by_name';
    case SceneByQueryFragment = 'scene_by_query_fragment';

    public static function fromString(string $type): self
    {
        // we allow some flexibility
        $type = strtolower($type);
        $type = str_replace(' ', '', $type);
        $type = str_replace('-', '', $type);
        $type = str_replace('_', '', $type);

        return match ($type) {
            'scenebyfragment' => self::SceneByFragment,
            'scenebyname' => self::SceneByName,
            'scenebyqueryfragment' => self::SceneByQueryFragment,
            default => throw new \InvalidArgumentException("Invalid scrap type: {$type}")
        };
    }
}
