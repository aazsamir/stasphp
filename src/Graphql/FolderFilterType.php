<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FolderFilterType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?FolderFilterType $AND;
    public ?FolderFilterType $OR;
    public ?FolderFilterType $NOT;
    public ?StringCriterionInput $path;
    public ?StringCriterionInput $basename;
    public ?HierarchicalMultiCriterionInput $parent_folder;
    public ?MultiCriterionInput $zip_file;
    public ?TimestampCriterionInput $mod_time;
    public ?IntCriterionInput $gallery_count;
    public ?FileFilterType $files_filter;
    public ?GalleryFilterType $galleries_filter;
    public ?TimestampCriterionInput $created_at;
    public ?TimestampCriterionInput $updated_at;

    public static function new(
        ?FolderFilterType $AND = null,
        ?FolderFilterType $OR = null,
        ?FolderFilterType $NOT = null,
        ?StringCriterionInput $path = null,
        ?StringCriterionInput $basename = null,
        ?HierarchicalMultiCriterionInput $parent_folder = null,
        ?MultiCriterionInput $zip_file = null,
        ?TimestampCriterionInput $mod_time = null,
        ?IntCriterionInput $gallery_count = null,
        ?FileFilterType $files_filter = null,
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
        $self->parent_folder = $parent_folder;
        $self->zip_file = $zip_file;
        $self->mod_time = $mod_time;
        $self->gallery_count = $gallery_count;
        $self->files_filter = $files_filter;
        $self->galleries_filter = $galleries_filter;
        $self->created_at = $created_at;
        $self->updated_at = $updated_at;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['AND'])) {
            $self->AND = \Aazsamir\Stasphp\Graphpql\FolderFilterType::fromArray($data['AND']);
        }
        if (isset($data['OR'])) {
            $self->OR = \Aazsamir\Stasphp\Graphpql\FolderFilterType::fromArray($data['OR']);
        }
        if (isset($data['NOT'])) {
            $self->NOT = \Aazsamir\Stasphp\Graphpql\FolderFilterType::fromArray($data['NOT']);
        }
        if (isset($data['path'])) {
            $self->path = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['path']);
        }
        if (isset($data['basename'])) {
            $self->basename = \Aazsamir\Stasphp\Graphpql\StringCriterionInput::fromArray($data['basename']);
        }
        if (isset($data['parent_folder'])) {
            $self->parent_folder = \Aazsamir\Stasphp\Graphpql\HierarchicalMultiCriterionInput::fromArray($data['parent_folder']);
        }
        if (isset($data['zip_file'])) {
            $self->zip_file = \Aazsamir\Stasphp\Graphpql\MultiCriterionInput::fromArray($data['zip_file']);
        }
        if (isset($data['mod_time'])) {
            $self->mod_time = \Aazsamir\Stasphp\Graphpql\TimestampCriterionInput::fromArray($data['mod_time']);
        }
        if (isset($data['gallery_count'])) {
            $self->gallery_count = \Aazsamir\Stasphp\Graphpql\IntCriterionInput::fromArray($data['gallery_count']);
        }
        if (isset($data['files_filter'])) {
            $self->files_filter = \Aazsamir\Stasphp\Graphpql\FileFilterType::fromArray($data['files_filter']);
        }
        if (isset($data['galleries_filter'])) {
            $self->galleries_filter = \Aazsamir\Stasphp\Graphpql\GalleryFilterType::fromArray($data['galleries_filter']);
        }
        if (isset($data['created_at'])) {
            $self->created_at = \Aazsamir\Stasphp\Graphpql\TimestampCriterionInput::fromArray($data['created_at']);
        }
        if (isset($data['updated_at'])) {
            $self->updated_at = \Aazsamir\Stasphp\Graphpql\TimestampCriterionInput::fromArray($data['updated_at']);
        }

        return $self;
    }
}
