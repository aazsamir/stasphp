<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class SceneParserResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public Scene $scene;
    public ?string $title;
    public ?string $code;
    public ?string $details;
    public ?string $director;
    public ?string $url;
    public ?string $date;
    public ?int $rating;
    public ?int $rating100;
    public ?string $studio_id;

    /** @var array<string> */
    public ?array $gallery_ids;

    /** @var array<string> */
    public ?array $performer_ids;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SceneMovieID> */
    public ?array $movies;

    /** @var array<string> */
    public ?array $tag_ids;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneSelectionSet>
     */
    public static function scene(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::scene();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function title(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function code(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function details(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function director(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function url(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function date(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function rating(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::rating();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function rating100(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::rating100();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function studio_id(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::studio_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function gallery_ids(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::gallery_ids();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function performer_ids(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::performer_ids();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneMovieIDSelectionSet>
     */
    public static function movies(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::movies();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField<mixed>
     */
    public static function tag_ids(): Fields\SceneParserResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneParserResultField::tag_ids();
    }

    /**
     * @param array<string> $gallery_ids
     * @param array<string> $performer_ids
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneMovieID> $movies
     * @param array<string> $tag_ids
     */
    public static function new(
        Scene $scene,
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $director = null,
        ?string $url = null,
        ?string $date = null,
        ?int $rating = null,
        ?int $rating100 = null,
        ?string $studio_id = null,
        ?array $gallery_ids = null,
        ?array $performer_ids = null,
        ?array $movies = null,
        ?array $tag_ids = null,
    ): self {
        $self = new self();
        $self->scene = $scene;
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->director = $director;
        $self->url = $url;
        $self->date = $date;
        $self->rating = $rating;
        $self->rating100 = $rating100;
        $self->studio_id = $studio_id;
        $self->gallery_ids = $gallery_ids;
        $self->performer_ids = $performer_ids;
        $self->movies = $movies;
        $self->tag_ids = $tag_ids;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['scene'])) {
            $self->scene = \Aazsamir\Stasphp\Graphpql\Scene::fromArray($data['scene']);
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['code'])) {
            $self->code = $data['code'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['director'])) {
            $self->director = $data['director'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
        }
        if (isset($data['rating'])) {
            $self->rating = $data['rating'];
        }
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['studio_id'])) {
            $self->studio_id = $data['studio_id'];
        }
        if (isset($data['gallery_ids'])) {
            $self->gallery_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['gallery_ids'] ?? []);
        }
        if (isset($data['performer_ids'])) {
            $self->performer_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['performer_ids'] ?? []);
        }
        if (isset($data['movies'])) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SceneMovieID::fromArray($data);
            }, $data['movies'] ?? []);
        }
        if (isset($data['tag_ids'])) {
            $self->tag_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['tag_ids'] ?? []);
        }

        return $self;
    }
}
