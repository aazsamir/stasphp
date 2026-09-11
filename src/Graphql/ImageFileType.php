<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ImageFileType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public \DateTimeInterface $mod_time;
    public int $size;
    public int $width;
    public int $height;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileTypeField<mixed>
     */
    public static function mod_time(): Fields\ImageFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileTypeField::mod_time();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileTypeField<mixed>
     */
    public static function size(): Fields\ImageFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileTypeField::size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileTypeField<mixed>
     */
    public static function width(): Fields\ImageFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileTypeField::width();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileTypeField<mixed>
     */
    public static function height(): Fields\ImageFileTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ImageFileTypeField::height();
    }

    public static function new(\DateTimeInterface $mod_time, int $size, int $width, int $height): self
    {
        $self = new self();
        $self->mod_time = $mod_time;
        $self->size = $size;
        $self->width = $width;
        $self->height = $height;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['mod_time'])) {
            $self->mod_time = new \DateTimeImmutable($data['mod_time']);
        }
        if (isset($data['size'])) {
            $self->size = $data['size'];
        }
        if (isset($data['width'])) {
            $self->width = $data['width'];
        }
        if (isset($data['height'])) {
            $self->height = $data['height'];
        }

        return $self;
    }
}
