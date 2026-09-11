<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

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

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> */
    public ?array $tags;

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedPerformer> */
    public ?array $performers;

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedMovie> */
    public ?array $movies;

    /** @var array<\Aazsamir\Stasphp\Graphpql\ScrapedGroup> */
    public ?array $groups;
    public ?string $remote_site_id;
    public ?int $duration;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashBoxFingerprint> */
    public ?array $fingerprints;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function title(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function code(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function details(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function director(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function url(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function urls(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function date(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function image(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::image();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneFileTypeSelectionSet>
     */
    public static function file(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::file();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedStudioSelectionSet>
     */
    public static function studio(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedTagSelectionSet>
     */
    public static function tags(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedPerformerSelectionSet>
     */
    public static function performers(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::performers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedMovieSelectionSet>
     */
    public static function movies(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::movies();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScrapedGroupSelectionSet>
     */
    public static function groups(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::groups();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function remote_site_id(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::remote_site_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<mixed>
     */
    public static function duration(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StashBoxFingerprintSelectionSet>
     */
    public static function fingerprints(): Fields\ScrapedSceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ScrapedSceneField::fingerprints();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedTag> $tags
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedPerformer> $performers
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedMovie> $movies
     * @param array<\Aazsamir\Stasphp\Graphpql\ScrapedGroup> $groups
     * @param array<\Aazsamir\Stasphp\Graphpql\StashBoxFingerprint> $fingerprints
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
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
        }
        if (isset($data['image'])) {
            $self->image = $data['image'];
        }
        if (isset($data['file'])) {
            $self->file = \Aazsamir\Stasphp\Graphpql\SceneFileType::fromArray($data['file']);
        }
        if (isset($data['studio'])) {
            $self->studio = \Aazsamir\Stasphp\Graphpql\ScrapedStudio::fromArray($data['studio']);
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\ScrapedTag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['performers'])) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\ScrapedPerformer::fromArray($data);
            }, $data['performers'] ?? []);
        }
        if (isset($data['movies'])) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\ScrapedMovie::fromArray($data);
            }, $data['movies'] ?? []);
        }
        if (isset($data['groups'])) {
            $self->groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\ScrapedGroup::fromArray($data);
            }, $data['groups'] ?? []);
        }
        if (isset($data['remote_site_id'])) {
            $self->remote_site_id = $data['remote_site_id'];
        }
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }
        if (isset($data['fingerprints'])) {
            $self->fingerprints = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\StashBoxFingerprint::fromArray($data);
            }, $data['fingerprints'] ?? []);
        }

        return $self;
    }
}
