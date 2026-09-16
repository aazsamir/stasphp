<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapedStudio implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $stored_id;
    public string $name;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?ScrapedStudio $parent;
    public ?string $image;
    public ?string $details;
    public ?string $aliases;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedTag> */
    public ?array $tags;
    public ?string $remote_site_id;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<mixed>
     */
    public static function stored_id(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::stored_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<mixed>
     */
    public static function name(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<mixed>
     */
    public static function url(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<mixed>
     */
    public static function urls(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function parent(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::parent();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<mixed>
     */
    public static function image(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<mixed>
     */
    public static function details(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<mixed>
     */
    public static function aliases(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField<mixed>
     */
    public static function remote_site_id(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedStudioField::remote_site_id();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedTag> $tags
     */
    public static function new(
        string $name,
        ?string $stored_id = null,
        ?string $url = null,
        ?array $urls = null,
        ?ScrapedStudio $parent = null,
        ?string $image = null,
        ?string $details = null,
        ?string $aliases = null,
        ?array $tags = null,
        ?string $remote_site_id = null,
    ): self {
        $self = new self();
        $self->name = $name;
        $self->stored_id = $stored_id;
        $self->url = $url;
        $self->urls = $urls;
        $self->parent = $parent;
        $self->image = $image;
        $self->details = $details;
        $self->aliases = $aliases;
        $self->tags = $tags;
        $self->remote_site_id = $remote_site_id;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('name', $data)) {
            $self->name = $data['name'];
        }
        if (array_key_exists('stored_id', $data)) {
            $self->stored_id = $data['stored_id'];
        }
        if (array_key_exists('url', $data)) {
            $self->url = $data['url'];
        }
        if (array_key_exists('urls', $data)) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (array_key_exists('parent', $data)) {
            $self->parent = \Aazsamir\Stasphp\Graphql\ScrapedStudio::fromArray($data['parent']);
        }
        if (array_key_exists('image', $data)) {
            $self->image = $data['image'];
        }
        if (array_key_exists('details', $data)) {
            $self->details = $data['details'];
        }
        if (array_key_exists('aliases', $data)) {
            $self->aliases = $data['aliases'];
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (array_key_exists('remote_site_id', $data)) {
            $self->remote_site_id = $data['remote_site_id'];
        }

        return $self;
    }
}
