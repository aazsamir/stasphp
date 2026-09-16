<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScrapedScene implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $title;
    public ?string $code;
    public ?string $details;
    public ?string $director;
    public ?string $url;

    /** @var array<string> */
    public ?array $urls;
    public ?string $date;
    public ?string $image;
    public ?SceneFileType $file;
    public ?ScrapedStudio $studio;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedTag> */
    public ?array $tags;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedPerformer> */
    public ?array $performers;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedMovie> */
    public ?array $movies;

    /** @var array<\Aazsamir\Stasphp\Graphql\ScrapedGroup> */
    public ?array $groups;
    public ?string $remote_site_id;
    public ?int $duration;

    /** @var array<\Aazsamir\Stasphp\Graphql\StashBoxFingerprint> */
    public ?array $fingerprints;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function title(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function code(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function details(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function director(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function url(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function urls(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function date(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function image(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphql\SelectionSet\SceneFileTypeSelectionSet>
     */
    public static function file(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::file();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function studio(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedPerformerSelectionSet>
     */
    public static function performers(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::performers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedMovieSelectionSet>
     */
    public static function movies(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::movies();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphql\SelectionSet\ScrapedGroupSelectionSet>
     */
    public static function groups(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::groups();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function remote_site_id(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::remote_site_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<mixed>
     */
    public static function duration(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphql\SelectionSet\StashBoxFingerprintSelectionSet>
     */
    public static function fingerprints(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScrapedSceneField::fingerprints();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedTag> $tags
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedPerformer> $performers
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedMovie> $movies
     * @param array<\Aazsamir\Stasphp\Graphql\ScrapedGroup> $groups
     * @param array<\Aazsamir\Stasphp\Graphql\StashBoxFingerprint> $fingerprints
     */
    public static function new(
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $director = null,
        ?string $url = null,
        ?array $urls = null,
        ?string $date = null,
        ?string $image = null,
        ?SceneFileType $file = null,
        ?ScrapedStudio $studio = null,
        ?array $tags = null,
        ?array $performers = null,
        ?array $movies = null,
        ?array $groups = null,
        ?string $remote_site_id = null,
        ?int $duration = null,
        ?array $fingerprints = null,
    ): self {
        $self = new self();
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->director = $director;
        $self->url = $url;
        $self->urls = $urls;
        $self->date = $date;
        $self->image = $image;
        $self->file = $file;
        $self->studio = $studio;
        $self->tags = $tags;
        $self->performers = $performers;
        $self->movies = $movies;
        $self->groups = $groups;
        $self->remote_site_id = $remote_site_id;
        $self->duration = $duration;
        $self->fingerprints = $fingerprints;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('title', $data)) {
            $self->title = $data['title'];
        }
        if (array_key_exists('code', $data)) {
            $self->code = $data['code'];
        }
        if (array_key_exists('details', $data)) {
            $self->details = $data['details'];
        }
        if (array_key_exists('director', $data)) {
            $self->director = $data['director'];
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
        if (array_key_exists('date', $data)) {
            $self->date = $data['date'];
        }
        if (array_key_exists('image', $data)) {
            $self->image = $data['image'];
        }
        if (array_key_exists('file', $data)) {
            $self->file = \Aazsamir\Stasphp\Graphql\SceneFileType::fromArray($data['file']);
        }
        if (array_key_exists('studio', $data)) {
            $self->studio = \Aazsamir\Stasphp\Graphql\ScrapedStudio::fromArray($data['studio']);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (array_key_exists('performers', $data)) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedPerformer::fromArray($data);
            }, $data['performers'] ?? []);
        }
        if (array_key_exists('movies', $data)) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedMovie::fromArray($data);
            }, $data['movies'] ?? []);
        }
        if (array_key_exists('groups', $data)) {
            $self->groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ScrapedGroup::fromArray($data);
            }, $data['groups'] ?? []);
        }
        if (array_key_exists('remote_site_id', $data)) {
            $self->remote_site_id = $data['remote_site_id'];
        }
        if (array_key_exists('duration', $data)) {
            $self->duration = $data['duration'];
        }
        if (array_key_exists('fingerprints', $data)) {
            $self->fingerprints = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\StashBoxFingerprint::fromArray($data);
            }, $data['fingerprints'] ?? []);
        }

        return $self;
    }
}
