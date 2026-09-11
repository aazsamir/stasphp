<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class StatsResultType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public int $scene_count;
    public float $scenes_size;
    public float $scenes_duration;
    public int $image_count;
    public float $images_size;
    public int $gallery_count;
    public int $performer_count;
    public int $studio_count;
    public int $group_count;
    public int $movie_count;
    public int $tag_count;
    public int $total_o_count;
    public float $total_play_duration;
    public int $total_play_count;
    public int $scenes_played;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function scene_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::scene_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function scenes_size(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::scenes_size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function scenes_duration(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::scenes_duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function image_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::image_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function images_size(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::images_size();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function gallery_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::gallery_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function performer_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::performer_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function studio_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::studio_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function group_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::group_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function movie_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::movie_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function tag_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::tag_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function total_o_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::total_o_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function total_play_duration(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::total_play_duration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function total_play_count(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::total_play_count();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField<mixed>
     */
    public static function scenes_played(): Fields\StatsResultTypeField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\StatsResultTypeField::scenes_played();
    }

    public static function new(
        int $scene_count,
        float $scenes_size,
        float $scenes_duration,
        int $image_count,
        float $images_size,
        int $gallery_count,
        int $performer_count,
        int $studio_count,
        int $group_count,
        int $movie_count,
        int $tag_count,
        int $total_o_count,
        float $total_play_duration,
        int $total_play_count,
        int $scenes_played,
    ): self {
        $self = new self();
        $self->scene_count = $scene_count;
        $self->scenes_size = $scenes_size;
        $self->scenes_duration = $scenes_duration;
        $self->image_count = $image_count;
        $self->images_size = $images_size;
        $self->gallery_count = $gallery_count;
        $self->performer_count = $performer_count;
        $self->studio_count = $studio_count;
        $self->group_count = $group_count;
        $self->movie_count = $movie_count;
        $self->tag_count = $tag_count;
        $self->total_o_count = $total_o_count;
        $self->total_play_duration = $total_play_duration;
        $self->total_play_count = $total_play_count;
        $self->scenes_played = $scenes_played;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['scene_count'])) {
            $self->scene_count = $data['scene_count'];
        }
        if (isset($data['scenes_size'])) {
            $self->scenes_size = $data['scenes_size'];
        }
        if (isset($data['scenes_duration'])) {
            $self->scenes_duration = $data['scenes_duration'];
        }
        if (isset($data['image_count'])) {
            $self->image_count = $data['image_count'];
        }
        if (isset($data['images_size'])) {
            $self->images_size = $data['images_size'];
        }
        if (isset($data['gallery_count'])) {
            $self->gallery_count = $data['gallery_count'];
        }
        if (isset($data['performer_count'])) {
            $self->performer_count = $data['performer_count'];
        }
        if (isset($data['studio_count'])) {
            $self->studio_count = $data['studio_count'];
        }
        if (isset($data['group_count'])) {
            $self->group_count = $data['group_count'];
        }
        if (isset($data['movie_count'])) {
            $self->movie_count = $data['movie_count'];
        }
        if (isset($data['tag_count'])) {
            $self->tag_count = $data['tag_count'];
        }
        if (isset($data['total_o_count'])) {
            $self->total_o_count = $data['total_o_count'];
        }
        if (isset($data['total_play_duration'])) {
            $self->total_play_duration = $data['total_play_duration'];
        }
        if (isset($data['total_play_count'])) {
            $self->total_play_count = $data['total_play_count'];
        }
        if (isset($data['scenes_played'])) {
            $self->scenes_played = $data['scenes_played'];
        }

        return $self;
    }
}
