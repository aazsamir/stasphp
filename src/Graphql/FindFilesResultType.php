<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FindFilesResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $count;
    public float $megapixels;
    public float $duration;
    public int $size;

    /** @var array<\Aazsamir\Stasphp\Graphql\BasicFile|\Aazsamir\Stasphp\Graphql\VideoFile|\Aazsamir\Stasphp\Graphql\ImageFile|\Aazsamir\Stasphp\Graphql\GalleryFile> */
    public array $files;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField<mixed>
     */
    public static function count(): Fields\FindFilesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField::count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField<mixed>
     */
    public static function megapixels(): Fields\FindFilesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField::megapixels();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField<mixed>
     */
    public static function duration(): Fields\FindFilesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField::duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField<mixed>
     */
    public static function size(): Fields\FindFilesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField::size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField<\Aazsamir\Stasphp\Graphql\SelectionSet\BaseFileSelectionSet>
     */
    public static function files(): Fields\FindFilesResultTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\FindFilesResultTypeField::files();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\BasicFile|\Aazsamir\Stasphp\Graphql\VideoFile|\Aazsamir\Stasphp\Graphql\ImageFile|\Aazsamir\Stasphp\Graphql\GalleryFile> $files
     */
    public static function new(int $count, float $megapixels, float $duration, int $size, array $files): self
    {
        $self = new self();
        $self->count = $count;
        $self->megapixels = $megapixels;
        $self->duration = $duration;
        $self->size = $size;
        $self->files = $files;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['count'])) {
            $self->count = $data['count'];
        }
        if (isset($data['megapixels'])) {
            $self->megapixels = $data['megapixels'];
        }
        if (isset($data['duration'])) {
            $self->duration = $data['duration'];
        }
        if (isset($data['size'])) {
            $self->size = $data['size'];
        }
        if (isset($data['files'])) {
            $self->files = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return ($data['__typename'] ?? '') === 'BasicFile'
                ? (\Aazsamir\Stasphp\Graphql\BasicFile::fromArray($data))
                : (($data['__typename'] ?? '') === 'VideoFile'
                    ? (\Aazsamir\Stasphp\Graphql\VideoFile::fromArray($data))
                    : (($data['__typename'] ?? '') === 'ImageFile'
                        ? (\Aazsamir\Stasphp\Graphql\ImageFile::fromArray($data))
                        : (($data['__typename'] ?? '') === 'GalleryFile'
                            ? (\Aazsamir\Stasphp\Graphql\GalleryFile::fromArray($data))
                            : (null))));
            }, $data['files'] ?? []);
        }

        return $self;
    }
}
