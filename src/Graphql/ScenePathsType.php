<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ScenePathsType implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $screenshot;
    public ?string $preview;
    public ?string $stream;
    public ?string $webp;
    public ?string $vtt;
    public ?string $sprite;
    public ?string $funscript;
    public ?string $interactive_heatmap;
    public ?string $caption;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function screenshot(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::screenshot();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function preview(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::preview();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function stream(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::stream();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function webp(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::webp();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function vtt(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::vtt();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function sprite(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::sprite();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function funscript(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::funscript();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function interactive_heatmap(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::interactive_heatmap();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField<mixed>
     */
    public static function caption(): Fields\ScenePathsTypeField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ScenePathsTypeField::caption();
    }

    public static function new(
        ?string $screenshot = null,
        ?string $preview = null,
        ?string $stream = null,
        ?string $webp = null,
        ?string $vtt = null,
        ?string $sprite = null,
        ?string $funscript = null,
        ?string $interactive_heatmap = null,
        ?string $caption = null,
    ): self {
        $self = new self();
        $self->screenshot = $screenshot;
        $self->preview = $preview;
        $self->stream = $stream;
        $self->webp = $webp;
        $self->vtt = $vtt;
        $self->sprite = $sprite;
        $self->funscript = $funscript;
        $self->interactive_heatmap = $interactive_heatmap;
        $self->caption = $caption;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['screenshot'])) {
            $self->screenshot = $data['screenshot'];
        }
        if (isset($data['preview'])) {
            $self->preview = $data['preview'];
        }
        if (isset($data['stream'])) {
            $self->stream = $data['stream'];
        }
        if (isset($data['webp'])) {
            $self->webp = $data['webp'];
        }
        if (isset($data['vtt'])) {
            $self->vtt = $data['vtt'];
        }
        if (isset($data['sprite'])) {
            $self->sprite = $data['sprite'];
        }
        if (isset($data['funscript'])) {
            $self->funscript = $data['funscript'];
        }
        if (isset($data['interactive_heatmap'])) {
            $self->interactive_heatmap = $data['interactive_heatmap'];
        }
        if (isset($data['caption'])) {
            $self->caption = $data['caption'];
        }

        return $self;
    }
}
