<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Fields;

/**
 * @template T
 */
class ConfigResultField implements \Aazsamir\Graphpql\Model\ObjectField
{
    private string $name;
    private \Aazsamir\Graphpql\Model\SelectionSet $child;
    private ?string $union = null;

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigGeneralResultSelectionSet>
     */
    public static function general(): self
    {
        $instance = new self();
        $instance->name = 'general';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\ConfigGeneralResultSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigInterfaceResultSelectionSet>
     */
    public static function interface(): self
    {
        $instance = new self();
        $instance->name = 'interface';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\ConfigInterfaceResultSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigDLNAResultSelectionSet>
     */
    public static function dlna(): self
    {
        $instance = new self();
        $instance->name = 'dlna';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\ConfigDLNAResultSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigScrapingResultSelectionSet>
     */
    public static function scraping(): self
    {
        $instance = new self();
        $instance->name = 'scraping';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\ConfigScrapingResultSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigDefaultSettingsResultSelectionSet>
     */
    public static function defaults(): self
    {
        $instance = new self();
        $instance->name = 'defaults';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\ConfigDefaultSettingsResultSelectionSet();

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function ui(): self
    {
        $instance = new self();
        $instance->name = 'ui';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function plugins(): self
    {
        $instance = new self();
        $instance->name = 'plugins';

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
