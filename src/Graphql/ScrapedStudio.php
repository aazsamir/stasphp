<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

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

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> */
    public ?array $tags;
    public ?string $remote_site_id;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<mixed>
     */
    public static function stored_id(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::stored_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<mixed>
     */
    public static function name(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<mixed>
     */
    public static function url(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<mixed>
     */
    public static function urls(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function parent(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::parent();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<mixed>
     */
    public static function image(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<mixed>
     */
    public static function details(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<mixed>
     */
    public static function aliases(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::aliases();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField<mixed>
     */
    public static function remote_site_id(): Fields\ScrapedStudioField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedStudioField::remote_site_id();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> $tags
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
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['stored_id'])) {
            $self->stored_id = $data['stored_id'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['parent'])) {
            $self->parent = \Aazsamir\Stasphp\Graphpql\ScrapedStudio::fromArray($data['parent']);
        }
        if (isset($data['image'])) {
            $self->image = $data['image'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['aliases'])) {
            $self->aliases = $data['aliases'];
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['remote_site_id'])) {
            $self->remote_site_id = $data['remote_site_id'];
        }

        return $self;
    }
}
