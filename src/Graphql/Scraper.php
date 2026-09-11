<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Scraper implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public string $name;
    public ?ScraperSpec $performer;
    public ?ScraperSpec $scene;
    public ?ScraperSpec $gallery;
    public ?ScraperSpec $image;
    public ?ScraperSpec $movie;
    public ?ScraperSpec $group;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField<mixed>
     */
    public static function id(): Fields\ScraperField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField<mixed>
     */
    public static function name(): Fields\ScraperField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScraperSpecSelectionSet>
     */
    public static function performer(): Fields\ScraperField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField::performer();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScraperSpecSelectionSet>
     */
    public static function scene(): Fields\ScraperField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField::scene();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScraperSpecSelectionSet>
     */
    public static function gallery(): Fields\ScraperField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField::gallery();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScraperSpecSelectionSet>
     */
    public static function image(): Fields\ScraperField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField::image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScraperSpecSelectionSet>
     */
    public static function movie(): Fields\ScraperField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField::movie();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScraperSpecSelectionSet>
     */
    public static function group(): Fields\ScraperField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScraperField::group();
    }

    public static function new(
        string $id,
        string $name,
        ?ScraperSpec $performer = null,
        ?ScraperSpec $scene = null,
        ?ScraperSpec $gallery = null,
        ?ScraperSpec $image = null,
        ?ScraperSpec $movie = null,
        ?ScraperSpec $group = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->name = $name;
        $self->performer = $performer;
        $self->scene = $scene;
        $self->gallery = $gallery;
        $self->image = $image;
        $self->movie = $movie;
        $self->group = $group;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['performer'])) {
            $self->performer = \Aazsamir\Stasphp\Graphpql\ScraperSpec::fromArray($data['performer']);
        }
        if (isset($data['scene'])) {
            $self->scene = \Aazsamir\Stasphp\Graphpql\ScraperSpec::fromArray($data['scene']);
        }
        if (isset($data['gallery'])) {
            $self->gallery = \Aazsamir\Stasphp\Graphpql\ScraperSpec::fromArray($data['gallery']);
        }
        if (isset($data['image'])) {
            $self->image = \Aazsamir\Stasphp\Graphpql\ScraperSpec::fromArray($data['image']);
        }
        if (isset($data['movie'])) {
            $self->movie = \Aazsamir\Stasphp\Graphpql\ScraperSpec::fromArray($data['movie']);
        }
        if (isset($data['group'])) {
            $self->group = \Aazsamir\Stasphp\Graphpql\ScraperSpec::fromArray($data['group']);
        }

        return $self;
    }
}
