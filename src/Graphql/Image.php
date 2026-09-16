<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Image implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?string $title;
    public ?string $code;
    public ?int $rating100;
    public ?string $url;

    /** @var array<string> */
    public array $urls;
    public ?string $date;
    public ?string $details;
    public ?string $photographer;
    public ?int $o_counter;
    public bool $organized;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /** @var array<\Aazsamir\Stasphp\Graphql\ImageFile> */
    public array $files;

    /** @var array<\Aazsamir\Stasphp\Graphql\VideoFile|\Aazsamir\Stasphp\Graphql\ImageFile> */
    public array $visual_files;
    public ImagePathsType $paths;

    /** @var array<\Aazsamir\Stasphp\Graphql\Gallery> */
    public array $galleries;
    public ?Studio $studio;

    /** @var array<\Aazsamir\Stasphp\Graphql\Tag> */
    public array $tags;

    /** @var array<\Aazsamir\Stasphp\Graphql\Performer> */
    public array $performers;
    public mixed $custom_fields;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function id(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function title(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function code(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function rating100(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::rating100();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function url(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function urls(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function date(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function details(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function photographer(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::photographer();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function o_counter(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::o_counter();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function organized(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::organized();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function created_at(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function updated_at(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\ImageFileSelectionSet>
     */
    public static function files(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::files();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\VisualFileSelectionSet>
     */
    public static function visual_files(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::visual_files();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\ImagePathsTypeSelectionSet>
     */
    public static function paths(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::paths();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\GallerySelectionSet>
     */
    public static function galleries(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::galleries();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\StudioSelectionSet>
     */
    public static function studio(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<\Aazsamir\Stasphp\Graphql\SelectionSet\PerformerSelectionSet>
     */
    public static function performers(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::performers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ImageField<mixed>
     */
    public static function custom_fields(): Fields\ImageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ImageField::custom_fields();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\ImageFile> $files
     * @param array<\Aazsamir\Stasphp\Graphql\VideoFile|\Aazsamir\Stasphp\Graphql\ImageFile> $visual_files
     * @param array<\Aazsamir\Stasphp\Graphql\Gallery> $galleries
     * @param array<\Aazsamir\Stasphp\Graphql\Tag> $tags
     * @param array<\Aazsamir\Stasphp\Graphql\Performer> $performers
     */
    public static function new(
        string $id,
        array $urls,
        bool $organized,
        \DateTimeInterface $created_at,
        \DateTimeInterface $updated_at,
        array $files,
        array $visual_files,
        ImagePathsType $paths,
        array $galleries,
        array $tags,
        array $performers,
        mixed $custom_fields,
        ?string $title = null,
        ?string $code = null,
        ?int $rating100 = null,
        ?string $url = null,
        ?string $date = null,
        ?string $details = null,
        ?string $photographer = null,
        ?int $o_counter = null,
        ?Studio $studio = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->urls = $urls;
        $self->organized = $organized;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->files = $files;
        $self->visual_files = $visual_files;
        $self->paths = $paths;
        $self->galleries = $galleries;
        $self->tags = $tags;
        $self->performers = $performers;
        $self->custom_fields = $custom_fields;
        $self->title = $title;
        $self->code = $code;
        $self->rating100 = $rating100;
        $self->url = $url;
        $self->date = $date;
        $self->details = $details;
        $self->photographer = $photographer;
        $self->o_counter = $o_counter;
        $self->studio = $studio;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('id', $data)) {
            $self->id = $data['id'];
        }
        if (array_key_exists('urls', $data)) {
            $self->urls = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['urls'] ?? []);
        }
        if (array_key_exists('organized', $data)) {
            $self->organized = $data['organized'];
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (array_key_exists('files', $data)) {
            $self->files = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\ImageFile::fromArray($data);
            }, $data['files'] ?? []);
        }
        if (array_key_exists('visual_files', $data)) {
            $self->visual_files = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return ($data['__typename'] ?? '') === 'VideoFile'
                ? (\Aazsamir\Stasphp\Graphql\VideoFile::fromArray($data))
                : (($data['__typename'] ?? '') === 'ImageFile'
                    ? (\Aazsamir\Stasphp\Graphql\ImageFile::fromArray($data))
                    : (null));
            }, $data['visual_files'] ?? []);
        }
        if (array_key_exists('paths', $data)) {
            $self->paths = \Aazsamir\Stasphp\Graphql\ImagePathsType::fromArray($data['paths']);
        }
        if (array_key_exists('galleries', $data)) {
            $self->galleries = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Gallery::fromArray($data);
            }, $data['galleries'] ?? []);
        }
        if (array_key_exists('tags', $data)) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (array_key_exists('performers', $data)) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Performer::fromArray($data);
            }, $data['performers'] ?? []);
        }
        if (array_key_exists('custom_fields', $data)) {
            $self->custom_fields = $data['custom_fields'];
        }
        if (array_key_exists('title', $data)) {
            $self->title = $data['title'];
        }
        if (array_key_exists('code', $data)) {
            $self->code = $data['code'];
        }
        if (array_key_exists('rating100', $data)) {
            $self->rating100 = $data['rating100'];
        }
        if (array_key_exists('url', $data)) {
            $self->url = $data['url'];
        }
        if (array_key_exists('date', $data)) {
            $self->date = $data['date'];
        }
        if (array_key_exists('details', $data)) {
            $self->details = $data['details'];
        }
        if (array_key_exists('photographer', $data)) {
            $self->photographer = $data['photographer'];
        }
        if (array_key_exists('o_counter', $data)) {
            $self->o_counter = $data['o_counter'];
        }
        if (array_key_exists('studio', $data)) {
            $self->studio = \Aazsamir\Stasphp\Graphql\Studio::fromArray($data['studio']);
        }

        return $self;
    }
}
