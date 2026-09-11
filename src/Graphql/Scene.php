<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class Scene implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?string $title;
    public ?string $code;
    public ?string $details;
    public ?string $director;
    public ?string $url;

    /** @var array<string> */
    public array $urls;
    public ?string $date;
    public ?int $rating100;
    public bool $organized;
    public ?int $o_counter;
    public bool $interactive;
    public ?int $interactive_speed;

    /** @var array<\Aazsamir\Stasphp\Graphpql\VideoCaption> */
    public ?array $captions;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;
    public ?\DateTimeInterface $last_played_at;
    public ?float $resume_time;
    public ?float $play_duration;
    public ?int $play_count;

    /** @var array<\DateTimeInterface> */
    public array $play_history;

    /** @var array<\DateTimeInterface> */
    public array $o_history;

    /** @var array<\Aazsamir\Stasphp\Graphpql\VideoFile> */
    public array $files;
    public ScenePathsType $paths;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SceneMarker> */
    public array $scene_markers;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Gallery> */
    public array $galleries;
    public ?Studio $studio;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SceneGroup> */
    public array $groups;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SceneMovie> */
    public array $movies;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Tag> */
    public array $tags;

    /** @var array<\Aazsamir\Stasphp\Graphpql\Performer> */
    public array $performers;

    /** @var array<\Aazsamir\Stasphp\Graphpql\StashID> */
    public array $stash_ids;
    public mixed $custom_fields;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SceneStreamEndpoint> */
    public array $sceneStreams;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function id(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function title(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function code(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function details(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function director(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::director();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function url(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function urls(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function date(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function rating100(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::rating100();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function organized(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::organized();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function o_counter(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::o_counter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function interactive(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::interactive();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function interactive_speed(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::interactive_speed();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\VideoCaptionSelectionSet>
     */
    public static function captions(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::captions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function created_at(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function updated_at(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function last_played_at(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::last_played_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function resume_time(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::resume_time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function play_duration(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::play_duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function play_count(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::play_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function play_history(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::play_history();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function o_history(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::o_history();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\VideoFileSelectionSet>
     */
    public static function files(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::files();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\ScenePathsTypeSelectionSet>
     */
    public static function paths(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::paths();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneMarkerSelectionSet>
     */
    public static function scene_markers(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::scene_markers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\GallerySelectionSet>
     */
    public static function galleries(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::galleries();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StudioSelectionSet>
     */
    public static function studio(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneGroupSelectionSet>
     */
    public static function groups(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::groups();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneMovieSelectionSet>
     */
    public static function movies(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::movies();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\PerformerSelectionSet>
     */
    public static function performers(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::performers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\StashIDSelectionSet>
     */
    public static function stash_ids(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::stash_ids();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<mixed>
     */
    public static function custom_fields(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::custom_fields();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\SceneField<\Aazsamir\Stasphp\Graphpql\SelectionSet\SceneStreamEndpointSelectionSet>
     */
    public static function sceneStreams(): Fields\SceneField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\SceneField::sceneStreams();
    }

    /**
     * @param array<string> $urls
     * @param array<\DateTimeInterface> $play_history
     * @param array<\DateTimeInterface> $o_history
     * @param array<\Aazsamir\Stasphp\Graphpql\VideoFile> $files
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneMarker> $scene_markers
     * @param array<\Aazsamir\Stasphp\Graphpql\Gallery> $galleries
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneGroup> $groups
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneMovie> $movies
     * @param array<\Aazsamir\Stasphp\Graphpql\Tag> $tags
     * @param array<\Aazsamir\Stasphp\Graphpql\Performer> $performers
     * @param array<\Aazsamir\Stasphp\Graphpql\StashID> $stash_ids
     * @param array<\Aazsamir\Stasphp\Graphpql\SceneStreamEndpoint> $sceneStreams
     * @param array<\Aazsamir\Stasphp\Graphpql\VideoCaption> $captions
     */
    public static function new(
        string $id,
        array $urls,
        bool $organized,
        bool $interactive,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        array $play_history,
        array $o_history,
        array $files,
        ScenePathsType $paths,
        array $scene_markers,
        array $galleries,
        array $groups,
        array $movies,
        array $tags,
        array $performers,
        array $stash_ids,
        mixed $custom_fields,
        array $sceneStreams,
        ?string $title = null,
        ?string $code = null,
        ?string $details = null,
        ?string $director = null,
        ?string $url = null,
        ?string $date = null,
        ?int $rating100 = null,
        ?int $o_counter = null,
        ?int $interactive_speed = null,
        ?array $captions = null,
        ?\DateTimeInterface $last_played_at = null,
        ?float $resume_time = null,
        ?float $play_duration = null,
        ?int $play_count = null,
        ?Studio $studio = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->urls = $urls;
        $self->organized = $organized;
        $self->interactive = $interactive;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->play_history = $play_history;
        $self->o_history = $o_history;
        $self->files = $files;
        $self->paths = $paths;
        $self->scene_markers = $scene_markers;
        $self->galleries = $galleries;
        $self->groups = $groups;
        $self->movies = $movies;
        $self->tags = $tags;
        $self->performers = $performers;
        $self->stash_ids = $stash_ids;
        $self->custom_fields = $custom_fields;
        $self->sceneStreams = $sceneStreams;
        $self->title = $title;
        $self->code = $code;
        $self->details = $details;
        $self->director = $director;
        $self->url = $url;
        $self->date = $date;
        $self->rating100 = $rating100;
        $self->o_counter = $o_counter;
        $self->interactive_speed = $interactive_speed;
        $self->captions = $captions;
        $self->last_played_at = $last_played_at;
        $self->resume_time = $resume_time;
        $self->play_duration = $play_duration;
        $self->play_count = $play_count;
        $self->studio = $studio;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['urls'])) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (isset($data['organized'])) {
            $self->organized = $data['organized'];
        }
        if (isset($data['interactive'])) {
            $self->interactive = $data['interactive'];
        }
        if (isset($data['created_at'])) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (isset($data['play_history'])) {
            $self->play_history = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return new \DateTimeImmutable($data);
            }, $data['play_history'] ?? []);
        }
        if (isset($data['o_history'])) {
            $self->o_history = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return new \DateTimeImmutable($data);
            }, $data['o_history'] ?? []);
        }
        if (isset($data['files'])) {
            $self->files = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\VideoFile::fromArray($data);
            }, $data['files'] ?? []);
        }
        if (isset($data['paths'])) {
            $self->paths = \Aazsamir\Stasphp\Graphpql\ScenePathsType::fromArray($data['paths']);
        }
        if (isset($data['scene_markers'])) {
            $self->scene_markers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SceneMarker::fromArray($data);
            }, $data['scene_markers'] ?? []);
        }
        if (isset($data['galleries'])) {
            $self->galleries = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Gallery::fromArray($data);
            }, $data['galleries'] ?? []);
        }
        if (isset($data['groups'])) {
            $self->groups = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SceneGroup::fromArray($data);
            }, $data['groups'] ?? []);
        }
        if (isset($data['movies'])) {
            $self->movies = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SceneMovie::fromArray($data);
            }, $data['movies'] ?? []);
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['performers'])) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\Performer::fromArray($data);
            }, $data['performers'] ?? []);
        }
        if (isset($data['stash_ids'])) {
            $self->stash_ids = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\StashID::fromArray($data);
            }, $data['stash_ids'] ?? []);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = $data['custom_fields'];
        }
        if (isset($data['sceneStreams'])) {
            $self->sceneStreams = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SceneStreamEndpoint::fromArray($data);
            }, $data['sceneStreams'] ?? []);
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
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['o_counter'])) {
            $self->o_counter = $data['o_counter'];
        }
        if (isset($data['interactive_speed'])) {
            $self->interactive_speed = $data['interactive_speed'];
        }
        if (isset($data['captions'])) {
            $self->captions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\VideoCaption::fromArray($data);
            }, $data['captions'] ?? []);
        }
        if (isset($data['last_played_at'])) {
            $self->last_played_at = new \DateTimeImmutable($data['last_played_at']);
        }
        if (isset($data['resume_time'])) {
            $self->resume_time = $data['resume_time'];
        }
        if (isset($data['play_duration'])) {
            $self->play_duration = $data['play_duration'];
        }
        if (isset($data['play_count'])) {
            $self->play_count = $data['play_count'];
        }
        if (isset($data['studio'])) {
            $self->studio = \Aazsamir\Stasphp\Graphpql\Studio::fromArray($data['studio']);
        }

        return $self;
    }
}
