<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql\Fields;

/**
 * @template T
 */
class BasicFileField implements \Aazsamir\Graphpql\Model\ObjectField
{
    private string $name;
    private \Aazsamir\Graphpql\Model\SelectionSet $child;
    private ?string $union = null;

    /**
     * @return self<mixed>
     */
    public static function id(): self
    {
        $instance = new self();
        $instance->name = 'id';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function path(): self
    {
        $instance = new self();
        $instance->name = 'path';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function basename(): self
    {
        $instance = new self();
        $instance->name = 'basename';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function parent_folder_id(): self
    {
        $instance = new self();
        $instance->name = 'parent_folder_id';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function zip_file_id(): self
    {
        $instance = new self();
        $instance->name = 'zip_file_id';

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet>
     */
    public static function parent_folder(): self
    {
        $instance = new self();
        $instance->name = 'parent_folder';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet();

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\BasicFileSelectionSet>
     */
    public static function zip_file(): self
    {
        $instance = new self();
        $instance->name = 'zip_file';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\BasicFileSelectionSet();

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function mod_time(): self
    {
        $instance = new self();
        $instance->name = 'mod_time';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function size(): self
    {
        $instance = new self();
        $instance->name = 'size';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function fingerprint(): self
    {
        $instance = new self();
        $instance->name = 'fingerprint';

        return $instance;
    }

    /**
     * @return self<\Aazsamir\Stasphp\Graphql\SelectionSet\FingerprintSelectionSet>
     */
    public static function fingerprints(): self
    {
        $instance = new self();
        $instance->name = 'fingerprints';
        $instance->child = new \Aazsamir\Stasphp\Graphql\SelectionSet\FingerprintSelectionSet();

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function created_at(): self
    {
        $instance = new self();
        $instance->name = 'created_at';

        return $instance;
    }

    /**
     * @return self<mixed>
     */
    public static function updated_at(): self
    {
        $instance = new self();
        $instance->name = 'updated_at';

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
