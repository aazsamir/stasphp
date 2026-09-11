<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ConfigImageLightboxResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?int $slideshowDelay;
    public ?ImageLightboxDisplayMode $displayMode;
    public ?bool $scaleUp;
    public ?bool $resetZoomOnNav;
    public ?ImageLightboxScrollMode $scrollMode;
    public int $scrollAttemptsBeforeChange;
    public ?bool $disableAnimation;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField<mixed>
     */
    public static function slideshowDelay(): Fields\ConfigImageLightboxResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField::slideshowDelay();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField<mixed>
     */
    public static function displayMode(): Fields\ConfigImageLightboxResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField::displayMode();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField<mixed>
     */
    public static function scaleUp(): Fields\ConfigImageLightboxResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField::scaleUp();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField<mixed>
     */
    public static function resetZoomOnNav(): Fields\ConfigImageLightboxResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField::resetZoomOnNav();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField<mixed>
     */
    public static function scrollMode(): Fields\ConfigImageLightboxResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField::scrollMode();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField<mixed>
     */
    public static function scrollAttemptsBeforeChange(): Fields\ConfigImageLightboxResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField::scrollAttemptsBeforeChange();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField<mixed>
     */
    public static function disableAnimation(): Fields\ConfigImageLightboxResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigImageLightboxResultField::disableAnimation();
    }

    public static function new(
        int $scrollAttemptsBeforeChange,
        ?int $slideshowDelay = null,
        ?ImageLightboxDisplayMode $displayMode = null,
        ?bool $scaleUp = null,
        ?bool $resetZoomOnNav = null,
        ?ImageLightboxScrollMode $scrollMode = null,
        ?bool $disableAnimation = null,
    ): self {
        $self = new self();
        $self->scrollAttemptsBeforeChange = $scrollAttemptsBeforeChange;
        $self->slideshowDelay = $slideshowDelay;
        $self->displayMode = $displayMode;
        $self->scaleUp = $scaleUp;
        $self->resetZoomOnNav = $resetZoomOnNav;
        $self->scrollMode = $scrollMode;
        $self->disableAnimation = $disableAnimation;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['scrollAttemptsBeforeChange'])) {
            $self->scrollAttemptsBeforeChange = $data['scrollAttemptsBeforeChange'];
        }
        if (isset($data['slideshowDelay'])) {
            $self->slideshowDelay = $data['slideshowDelay'];
        }
        if (isset($data['displayMode'])) {
            $self->displayMode = \Aazsamir\Stasphp\Graphpql\ImageLightboxDisplayMode::from($data['displayMode']);
        }
        if (isset($data['scaleUp'])) {
            $self->scaleUp = $data['scaleUp'];
        }
        if (isset($data['resetZoomOnNav'])) {
            $self->resetZoomOnNav = $data['resetZoomOnNav'];
        }
        if (isset($data['scrollMode'])) {
            $self->scrollMode = \Aazsamir\Stasphp\Graphpql\ImageLightboxScrollMode::from($data['scrollMode']);
        }
        if (isset($data['disableAnimation'])) {
            $self->disableAnimation = $data['disableAnimation'];
        }

        return $self;
    }
}
