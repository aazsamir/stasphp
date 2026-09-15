<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapedTag implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $stored_id;
    public string $name;
    public ?string $description;

    /** @var array<string> */
    public ?array $alias_list;
    public ?ScrapedTag $parent;
    public ?string $remote_site_id;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField<mixed>
     */
    public static function stored_id(): Fields\ScrapedTagField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField::stored_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField<mixed>
     */
    public static function name(): Fields\ScrapedTagField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField<mixed>
     */
    public static function description(): Fields\ScrapedTagField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField::description();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField<mixed>
     */
    public static function alias_list(): Fields\ScrapedTagField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField::alias_list();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function parent(): Fields\ScrapedTagField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField::parent();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField<mixed>
     */
    public static function remote_site_id(): Fields\ScrapedTagField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedTagField::remote_site_id();
    }

    /**
     * @param array<string> $alias_list
     */
    public static function new(
        string $name,
        ?string $stored_id = null,
        ?string $description = null,
        ?array $alias_list = null,
        ?ScrapedTag $parent = null,
        ?string $remote_site_id = null,
    ): self {
        $self = new self();
        $self->name = $name;
        $self->stored_id = $stored_id;
        $self->description = $description;
        $self->alias_list = $alias_list;
        $self->parent = $parent;
        $self->remote_site_id = $remote_site_id;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['stored_id'])) {
            $self->stored_id = $data['stored_id'];
        }
        if (isset($data['description'])) {
            $self->description = $data['description'];
        }
        if (isset($data['alias_list'])) {
            $self->alias_list = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['alias_list'] ?? []);
        }
        if (isset($data['parent'])) {
            $self->parent = \Aazsamir\Stasphp\Graphql\ScrapedTag::fromArray($data['parent']);
        }
        if (isset($data['remote_site_id'])) {
            $self->remote_site_id = $data['remote_site_id'];
        }

        return $self;
    }
}
