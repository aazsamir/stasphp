<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Gallery implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;
    public ?string $title;
    public ?string $code;
    public ?string $url;

    /** @var array<string> */
    public array $urls;
    public ?string $date;
    public ?string $details;
    public ?string $photographer;
    public ?int $rating100;
    public bool $organized;
    public \DateTimeInterface $created_at;
    public \DateTimeInterface $updated_at;

    /** @var array<\Aazsamir\Stasphp\Graphql\GalleryFile> */
    public array $files;
    public ?Folder $folder;

    /** @var array<\Aazsamir\Stasphp\Graphql\GalleryChapter> */
    public array $chapters;

    /** @var array<\Aazsamir\Stasphp\Graphql\Scene> */
    public array $scenes;
    public ?Studio $studio;
    public int $image_count;

    /** @var array<\Aazsamir\Stasphp\Graphql\Tag> */
    public array $tags;

    /** @var array<\Aazsamir\Stasphp\Graphql\Performer> */
    public array $performers;
    public ?Image $cover;
    public GalleryPathsType $paths;
    public mixed $custom_fields;
    public Image $image;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function id(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function title(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::title();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function code(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::code();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function url(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::url();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function urls(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::urls();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function date(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function details(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::details();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function photographer(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::photographer();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function rating100(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::rating100();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function organized(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::organized();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function created_at(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::created_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function updated_at(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::updated_at();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\GalleryFileSelectionSet>
     */
    public static function files(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::files();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\FolderSelectionSet>
     */
    public static function folder(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::folder();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\GalleryChapterSelectionSet>
     */
    public static function chapters(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::chapters();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\SceneSelectionSet>
     */
    public static function scenes(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::scenes();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\StudioSelectionSet>
     */
    public static function studio(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::studio();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function image_count(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::image_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\TagSelectionSet>
     */
    public static function tags(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::tags();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\PerformerSelectionSet>
     */
    public static function performers(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::performers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\ImageSelectionSet>
     */
    public static function cover(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::cover();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\GalleryPathsTypeSelectionSet>
     */
    public static function paths(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::paths();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<mixed>
     */
    public static function custom_fields(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::custom_fields();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\GalleryField<\Aazsamir\Stasphp\Graphql\SelectionSet\ImageSelectionSet>
     */
    public static function image(): Fields\GalleryField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\GalleryField::image();
    }

    /**
     * @param array<string> $urls
     * @param array<\Aazsamir\Stasphp\Graphql\GalleryFile> $files
     * @param array<\Aazsamir\Stasphp\Graphql\GalleryChapter> $chapters
     * @param array<\Aazsamir\Stasphp\Graphql\Scene> $scenes
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
        array $chapters,
        array $scenes,
        int $image_count,
        array $tags,
        array $performers,
        GalleryPathsType $paths,
        mixed $custom_fields,
        Image $image,
        ?string $title = null,
        ?string $code = null,
        ?string $url = null,
        ?string $date = null,
        ?string $details = null,
        ?string $photographer = null,
        ?int $rating100 = null,
        ?Folder $folder = null,
        ?Studio $studio = null,
        ?Image $cover = null,
    ): self {
        $self = new self();
        $self->id = $id;
        $self->urls = $urls;
        $self->organized = $organized;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;
        $self->files = $files;
        $self->chapters = $chapters;
        $self->scenes = $scenes;
        $self->image_count = $image_count;
        $self->tags = $tags;
        $self->performers = $performers;
        $self->paths = $paths;
        $self->custom_fields = $custom_fields;
        $self->image = $image;
        $self->title = $title;
        $self->code = $code;
        $self->url = $url;
        $self->date = $date;
        $self->details = $details;
        $self->photographer = $photographer;
        $self->rating100 = $rating100;
        $self->folder = $folder;
        $self->studio = $studio;
        $self->cover = $cover;

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
        if (isset($data['created_at'])) {
            $self->created_at = new \DateTimeImmutable($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = new \DateTimeImmutable($data['updated_at']);
        }
        if (isset($data['files'])) {
            $self->files = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\GalleryFile::fromArray($data);
            }, $data['files'] ?? []);
        }
        if (isset($data['chapters'])) {
            $self->chapters = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\GalleryChapter::fromArray($data);
            }, $data['chapters'] ?? []);
        }
        if (isset($data['scenes'])) {
            $self->scenes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Scene::fromArray($data);
            }, $data['scenes'] ?? []);
        }
        if (isset($data['image_count'])) {
            $self->image_count = $data['image_count'];
        }
        if (isset($data['tags'])) {
            $self->tags = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Tag::fromArray($data);
            }, $data['tags'] ?? []);
        }
        if (isset($data['performers'])) {
            $self->performers = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Performer::fromArray($data);
            }, $data['performers'] ?? []);
        }
        if (isset($data['paths'])) {
            $self->paths = \Aazsamir\Stasphp\Graphql\GalleryPathsType::fromArray($data['paths']);
        }
        if (isset($data['custom_fields'])) {
            $self->custom_fields = $data['custom_fields'];
        }
        if (isset($data['image'])) {
            $self->image = \Aazsamir\Stasphp\Graphql\Image::fromArray($data['image']);
        }
        if (isset($data['title'])) {
            $self->title = $data['title'];
        }
        if (isset($data['code'])) {
            $self->code = $data['code'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['date'])) {
            $self->date = $data['date'];
        }
        if (isset($data['details'])) {
            $self->details = $data['details'];
        }
        if (isset($data['photographer'])) {
            $self->photographer = $data['photographer'];
        }
        if (isset($data['rating100'])) {
            $self->rating100 = $data['rating100'];
        }
        if (isset($data['folder'])) {
            $self->folder = \Aazsamir\Stasphp\Graphql\Folder::fromArray($data['folder']);
        }
        if (isset($data['studio'])) {
            $self->studio = \Aazsamir\Stasphp\Graphql\Studio::fromArray($data['studio']);
        }
        if (isset($data['cover'])) {
            $self->cover = \Aazsamir\Stasphp\Graphql\Image::fromArray($data['cover']);
        }

        return $self;
    }
}
