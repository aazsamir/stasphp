<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class FileFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?FileFilterType $AND;
    public ?FileFilterType $OR;
    public ?FileFilterType $NOT;
    public ?StringCriterionInput $path;
    public ?StringCriterionInput $basename;
    public ?StringCriterionInput $dir;
    public ?HierarchicalMultiCriterionInput $parent_folder;
    public ?MultiCriterionInput $zip_file;
    public ?TimestampCriterionInput $mod_time;
    public ?FileDuplicationCriterionInput $duplicated;

    /** @var array<\Aazsamir\Stasphp\Graphql\FingerprintFilterInput> */
    public ?array $hashes;
    public ?VideoFileFilterInput $video_file_filter;
    public ?ImageFileFilterInput $image_file_filter;
    public ?IntCriterionInput $scene_count;
    public ?IntCriterionInput $image_count;
    public ?IntCriterionInput $gallery_count;
    public ?SceneFilterType $scenes_filter;
    public ?ImageFilterType $images_filter;
    public ?GalleryFilterType $galleries_filter;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\FingerprintFilterInput> $hashes
     */
    public static function new(
        ?FileFilterType $AND = null,
        ?FileFilterType $OR = null,
        ?FileFilterType $NOT = null,
        ?StringCriterionInput $path = null,
        ?StringCriterionInput $basename = null,
        ?StringCriterionInput $dir = null,
        ?HierarchicalMultiCriterionInput $parent_folder = null,
        ?MultiCriterionInput $zip_file = null,
        ?TimestampCriterionInput $mod_time = null,
        ?FileDuplicationCriterionInput $duplicated = null,
        ?array $hashes = null,
        ?VideoFileFilterInput $video_file_filter = null,
        ?ImageFileFilterInput $image_file_filter = null,
        ?IntCriterionInput $scene_count = null,
        ?IntCriterionInput $image_count = null,
        ?IntCriterionInput $gallery_count = null,
        ?SceneFilterType $scenes_filter = null,
        ?ImageFilterType $images_filter = null,
        ?GalleryFilterType $galleries_filter = null,
        ?TimestampCriterionInput $created_at = null,
        ?TimestampCriterionInput $updated_at = null,
    ): self {
        $self = new self();
        $self->AND = $AND;
        $self->OR = $OR;
        $self->NOT = $NOT;
        $self->path = $path;
        $self->basename = $basename;
        $self->dir = $dir;
        $self->parent_folder = $parent_folder;
        $self->zip_file = $zip_file;
        $self->mod_time = $mod_time;
        $self->duplicated = $duplicated;
        $self->hashes = $hashes;
        $self->video_file_filter = $video_file_filter;
        $self->image_file_filter = $image_file_filter;
        $self->scene_count = $scene_count;
        $self->image_count = $image_count;
        $self->gallery_count = $gallery_count;
        $self->scenes_filter = $scenes_filter;
        $self->images_filter = $images_filter;
        $self->galleries_filter = $galleries_filter;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('AND', $data)) {
            $self->AND = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['AND']);
        }
        if (array_key_exists('OR', $data)) {
            $self->OR = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['OR']);
        }
        if (array_key_exists('NOT', $data)) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['NOT']);
        }
        if (array_key_exists('path', $data)) {
            $self->path = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['path']);
        }
        if (array_key_exists('basename', $data)) {
            $self->basename = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['basename']);
        }
        if (array_key_exists('dir', $data)) {
            $self->dir = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['dir']);
        }
        if (array_key_exists('parent_folder', $data)) {
            $self->parent_folder = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['parent_folder']);
        }
        if (array_key_exists('zip_file', $data)) {
            $self->zip_file = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['zip_file']);
        }
        if (array_key_exists('mod_time', $data)) {
            $self->mod_time = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['mod_time']);
        }
        if (array_key_exists('duplicated', $data)) {
            $self->duplicated = \Aazsamir\Stasphp\Graphql\FileDuplicationCriterionInput::fromArray($data['duplicated']);
        }
        if (array_key_exists('hashes', $data)) {
            $self->hashes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\FingerprintFilterInput::fromArray($data);
            }, $data['hashes'] ?? []);
        }
        if (array_key_exists('video_file_filter', $data)) {
            $self->video_file_filter = \Aazsamir\Stasphp\Graphql\VideoFileFilterInput::fromArray($data['video_file_filter']);
        }
        if (array_key_exists('image_file_filter', $data)) {
            $self->image_file_filter = \Aazsamir\Stasphp\Graphql\ImageFileFilterInput::fromArray($data['image_file_filter']);
        }
        if (array_key_exists('scene_count', $data)) {
            $self->scene_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['scene_count']);
        }
        if (array_key_exists('image_count', $data)) {
            $self->image_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['image_count']);
        }
        if (array_key_exists('gallery_count', $data)) {
            $self->gallery_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['gallery_count']);
        }
        if (array_key_exists('scenes_filter', $data)) {
            $self->scenes_filter = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['scenes_filter']);
        }
        if (array_key_exists('images_filter', $data)) {
            $self->images_filter = \Aazsamir\Stasphp\Graphql\ImageFilterType::fromArray($data['images_filter']);
        }
        if (array_key_exists('galleries_filter', $data)) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (array_key_exists('created_at', $data)) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }

        return $self;
    }
}
