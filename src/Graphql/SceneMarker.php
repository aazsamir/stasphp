<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneMarker implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public Scene $scene;
    public string $title;
    public float $seconds;
    public ?float $end_seconds;
    public Tag $primary_tag;

    /** @var array<\Aazsamir\Stasphp\Graphql\Tag> */
    public array $tags;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;
    public string $stream;
    public string $preview;
    public string $screenshot;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function id(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<\Aazsamir\Stasphp\Graphql\SelectionSet\SceneSelectionSet>
     */
    public static function scene(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::scene();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function title(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function seconds(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::seconds();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function end_seconds(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::end_seconds();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<\Aazsamir\Stasphp\Graphql\SelectionSet\TagSelectionSet>
     */
    public static function primary_tag(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::primary_tag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<\Aazsamir\Stasphp\Graphql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function created_at(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function updated_at(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function stream(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::stream();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function preview(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::preview();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField<mixed>
     */
    public static function screenshot(): Fields\SceneMarkerField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\SceneMarkerField::screenshot();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Tag> $tags
     */
    public static function new(
        string $id,
        Scene $scene,
        string $title,
        float $seconds,
        Tag $primary_tag,
        array $tags,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        string $stream,
        string $preview,
        string $screenshot,
        ?float $end_seconds = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->scene = $scene;
        $self->title = $title;
        $self->seconds = $seconds;
        $self->primary_tag = $primary_tag;
        $self->tags = $tags;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->stream = $stream;
        $self->preview = $preview;
        $self->screenshot = $screenshot;
        $self->end_seconds = $end_seconds;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['scene'])) {
            $self->scene = \Aazsamir\Stasphp\Graphql\Scene::fromArray($data['scene']);
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['seconds'])) {
            $self->seconds = $data['seconds'];
        }
        if (isset($data['primary_tag'])) {
            $self->primary_tag = \Aazsamir\Stasphp\Graphql\Tag::fromArray($data['primary_tag']);
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['created_at'])) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (isset($data['stream'])) {
            $self->stream = $data['stream'];
        }
        if (isset($data['preview'])) {
            $self->preview = $data['preview'];
        }
        if (isset($data['screenshot'])) {
            $self->screenshot = $data['screenshot'];
        }
        if (isset($data['end_seconds'])) {
            $self->end_seconds = $data['end_seconds'];
        }

        return $self;
    }
}
