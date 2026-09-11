<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql\Fields;

/**
 * @template T
 */
class ScrapedSceneField implements \Aazsamir\Graphpql\Model\ObjectField
{
    private string $name;
    private \Aazsamir\Graphpql\Model\SelectionSet $child;
    private ?string $union = null;

    /**
     * @return self<mixed>
     */
    public static function title(): self
    {
        $instance = new self();
        $instance->name = 'title';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function code(): self
    {
        $instance = new self();
        $instance->name = 'code';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function details(): self
    {
        $instance = new self();
        $instance->name = 'details';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function director(): self
    {
        $instance = new self();
        $instance->name = 'director';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function url(): self
    {
        $instance = new self();
        $instance->name = 'url';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function urls(): self
    {
        $instance = new self();
        $instance->name = 'urls';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function date(): self
    {
        $instance = new self();
        $instance->name = 'date';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function image(): self
    {
        $instance = new self();
        $instance->name = 'image';

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneFileTypeSelectionSet>
     */
    public static function file(): self
    {
        $instance = new self();
        $instance->name = 'file';
        $instance->child = new \Aazsamir\Stasphp\Graphpql\SelectionSet\SceneFileTypeSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function studio(): self
    {
        $instance = new self();
        $instance->name = 'studio';
        $instance->child = new \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedStudioSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): self
    {
        $instance = new self();
        $instance->name = 'tags';
        $instance->child = new \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedTagSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedPerformerSelectionSet>
     */
    public static function performers(): self
    {
        $instance = new self();
        $instance->name = 'performers';
        $instance->child = new \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedPerformerSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedMovieSelectionSet>
     */
    public static function movies(): self
    {
        $instance = new self();
        $instance->name = 'movies';
        $instance->child = new \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedMovieSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedGroupSelectionSet>
     */
    public static function groups(): self
    {
        $instance = new self();
        $instance->name = 'groups';
        $instance->child = new \Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedGroupSelectionSet();

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function remote_site_id(): self
    {
        $instance = new self();
        $instance->name = 'remote_site_id';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function duration(): self
    {
        $instance = new self();
        $instance->name = 'duration';

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphpql\SelectionSet\StashBoxFingerprintSelectionSet>
     */
    public static function fingerprints(): self
    {
        $instance = new self();
        $instance->name = 'fingerprints';
        $instance->child = new \Aazsamir\Stasphp\Graphpql\SelectionSet\StashBoxFingerprintSelectionSet();

        return $instance;
    }

    /**
     * @param callable(T): void $selection
     */
    public function selector(callable $selection): self
    {
        $selection($this->child);

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChild(): ?\Aazsamir\Graphpql\Model\SelectionSet
    {
        if (isset($this->child)) {
            return $this->child;
        }

        return null;
    }

    public function getUnion(): ?string
    {
        return $this->union;
    }
}
