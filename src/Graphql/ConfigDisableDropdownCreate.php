<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigDisableDropdownCreate implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public bool $performer;
    public bool $tag;
    public bool $studio;
    public bool $movie;
    public bool $gallery;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField<mixed>
     */
    public static function performer(): Fields\ConfigDisableDropdownCreateField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField::performer();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField<mixed>
     */
    public static function tag(): Fields\ConfigDisableDropdownCreateField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField::tag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField<mixed>
     */
    public static function studio(): Fields\ConfigDisableDropdownCreateField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField<mixed>
     */
    public static function movie(): Fields\ConfigDisableDropdownCreateField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField::movie();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField<mixed>
     */
    public static function gallery(): Fields\ConfigDisableDropdownCreateField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigDisableDropdownCreateField::gallery();
    }

    public static function new(bool $performer, bool $tag, bool $studio, bool $movie, bool $gallery): self
    {
        $self = new self();
        $self->performer = $performer;
        $self->tag = $tag;
        $self->studio = $studio;
        $self->movie = $movie;
        $self->gallery = $gallery;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['performer'])) {
            $self->performer = $data['performer'];
        }
        if (isset($data['tag'])) {
            $self->tag = $data['tag'];
        }
        if (isset($data['studio'])) {
            $self->studio = $data['studio'];
        }
        if (isset($data['movie'])) {
            $self->movie = $data['movie'];
        }
        if (isset($data['gallery'])) {
            $self->gallery = $data['gallery'];
        }

        return $self;
    }
}
