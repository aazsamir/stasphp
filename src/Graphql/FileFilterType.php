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
        if (isset($data['AND'])) {
            $self->AND = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['AND']);
        }
        if (isset($data['OR'])) {
            $self->OR = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['OR']);
        }
        if (isset($data['NOT'])) {
            $self->NOT = \Aazsamir\Stasphp\Graphql\FileFilterType::fromArray($data['NOT']);
        }
        if (isset($data['path'])) {
            $self->path = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['path']);
        }
        if (isset($data['basename'])) {
            $self->basename = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['basename']);
        }
        if (isset($data['dir'])) {
            $self->dir = \Aazsamir\Stasphp\Graphql\StringCriterionInput::fromArray($data['dir']);
        }
        if (isset($data['parent_folder'])) {
            $self->parent_folder = \Aazsamir\Stasphp\Graphql\HierarchicalMultiCriterionInput::fromArray($data['parent_folder']);
        }
        if (isset($data['zip_file'])) {
            $self->zip_file = \Aazsamir\Stasphp\Graphql\MultiCriterionInput::fromArray($data['zip_file']);
        }
        if (isset($data['mod_time'])) {
            $self->mod_time = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['mod_time']);
        }
        if (isset($data['duplicated'])) {
            $self->duplicated = \Aazsamir\Stasphp\Graphql\FileDuplicationCriterionInput::fromArray($data['duplicated']);
        }
        if (isset($data['hashes'])) {
            $self->hashes = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\FingerprintFilterInput::fromArray($data);
            }, $data['hashes'] ?? []);
        }
        if (isset($data['video_file_filter'])) {
            $self->video_file_filter = \Aazsamir\Stasphp\Graphql\VideoFileFilterInput::fromArray($data['video_file_filter']);
        }
        if (isset($data['image_file_filter'])) {
            $self->image_file_filter = \Aazsamir\Stasphp\Graphql\ImageFileFilterInput::fromArray($data['image_file_filter']);
        }
        if (isset($data['scene_count'])) {
            $self->scene_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['scene_count']);
        }
        if (isset($data['image_count'])) {
            $self->image_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['image_count']);
        }
        if (isset($data['gallery_count'])) {
            $self->gallery_count = \Aazsamir\Stasphp\Graphql\IntCriterionInput::fromArray($data['gallery_count']);
        }
        if (isset($data['scenes_filter'])) {
            $self->scenes_filter = \Aazsamir\Stasphp\Graphql\SceneFilterType::fromArray($data['scenes_filter']);
        }
        if (isset($data['images_filter'])) {
            $self->images_filter = \Aazsamir\Stasphp\Graphql\ImageFilterType::fromArray($data['images_filter']);
        }
        if (isset($data['galleries_filter'])) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (isset($data['created_at'])) {
            $self->created_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = \Aazsamir\Stasphp\Graphql\TimestampCriterionInput::fromArray($data['updated_at']);
        }

        return $self;
    }
}
