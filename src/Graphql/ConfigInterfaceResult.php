<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigInterfaceResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public bool $sfwContentMode;

    /** @var array<string> */
    public ?array $menuItems;
    public ?bool $soundOnPreview;
    public ?bool $wallShowTitle;
    public ?string $wallPlayback;
    public ?bool $showScrubber;
    public ?int $maximumLoopDuration;
    public ?bool $noBrowser;
    public ?bool $notificationsEnabled;
    public ?bool $autostartVideo;
    public ?bool $autostartVideoOnPlaySelected;
    public ?bool $continuePlaylistDefault;
    public ?bool $showStudioAsText;
    public ?string $css;
    public ?bool $cssEnabled;
    public ?string $javascript;
    public ?bool $javascriptEnabled;
    public ?string $customLocales;
    public ?bool $customLocalesEnabled;
    public ?bool $disableCustomizations;
    public ?string $language;
    public ConfigImageLightboxResult $imageLightbox;
    public ConfigDisableDropdownCreate $disableDropdownCreate;
    public ?string $handyKey;
    public ?int $funscriptOffset;
    public ?bool $useStashHostedFunscript;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function sfwContentMode(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::sfwContentMode();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function menuItems(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::menuItems();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function soundOnPreview(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::soundOnPreview();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function wallShowTitle(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::wallShowTitle();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function wallPlayback(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::wallPlayback();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function showScrubber(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::showScrubber();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function maximumLoopDuration(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::maximumLoopDuration();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function noBrowser(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::noBrowser();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function notificationsEnabled(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::notificationsEnabled();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function autostartVideo(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::autostartVideo();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function autostartVideoOnPlaySelected(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::autostartVideoOnPlaySelected();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function continuePlaylistDefault(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::continuePlaylistDefault();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function showStudioAsText(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::showStudioAsText();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function css(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::css();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function cssEnabled(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::cssEnabled();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function javascript(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::javascript();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function javascriptEnabled(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::javascriptEnabled();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function customLocales(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::customLocales();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function customLocalesEnabled(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::customLocalesEnabled();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function disableCustomizations(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::disableCustomizations();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function language(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::language();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigImageLightboxResultSelectionSet>
     */
    public static function imageLightbox(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::imageLightbox();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<\Aazsamir\Stasphp\Graphql\SelectionSet\ConfigDisableDropdownCreateSelectionSet>
     */
    public static function disableDropdownCreate(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::disableDropdownCreate();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function handyKey(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::handyKey();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function funscriptOffset(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::funscriptOffset();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField<mixed>
     */
    public static function useStashHostedFunscript(): Fields\ConfigInterfaceResultField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\ConfigInterfaceResultField::useStashHostedFunscript();
    }

    /**
     * @param array<string> $menuItems
     */
    public static function new(
        bool $sfwContentMode,
        ConfigImageLightboxResult $imageLightbox,
        ConfigDisableDropdownCreate $disableDropdownCreate,
        ?array $menuItems = null,
        ?bool $soundOnPreview = null,
        ?bool $wallShowTitle = null,
        ?string $wallPlayback = null,
        ?bool $showScrubber = null,
        ?int $maximumLoopDuration = null,
        ?bool $noBrowser = null,
        ?bool $notificationsEnabled = null,
        ?bool $autostartVideo = null,
        ?bool $autostartVideoOnPlaySelected = null,
        ?bool $continuePlaylistDefault = null,
        ?bool $showStudioAsText = null,
        ?string $css = null,
        ?bool $cssEnabled = null,
        ?string $javascript = null,
        ?bool $javascriptEnabled = null,
        ?string $customLocales = null,
        ?bool $customLocalesEnabled = null,
        ?bool $disableCustomizations = null,
        ?string $language = null,
        ?string $handyKey = null,
        ?int $funscriptOffset = null,
        ?bool $useStashHostedFunscript = null,
    ): self {
        $self = new self();
        $self->sfwContentMode = $sfwContentMode;
        $self->imageLightbox = $imageLightbox;
        $self->disableDropdownCreate = $disableDropdownCreate;
        $self->menuItems = $menuItems;
        $self->soundOnPreview = $soundOnPreview;
        $self->wallShowTitle = $wallShowTitle;
        $self->wallPlayback = $wallPlayback;
        $self->showScrubber = $showScrubber;
        $self->maximumLoopDuration = $maximumLoopDuration;
        $self->noBrowser = $noBrowser;
        $self->notificationsEnabled = $notificationsEnabled;
        $self->autostartVideo = $autostartVideo;
        $self->autostartVideoOnPlaySelected = $autostartVideoOnPlaySelected;
        $self->continuePlaylistDefault = $continuePlaylistDefault;
        $self->showStudioAsText = $showStudioAsText;
        $self->css = $css;
        $self->cssEnabled = $cssEnabled;
        $self->javascript = $javascript;
        $self->javascriptEnabled = $javascriptEnabled;
        $self->customLocales = $customLocales;
        $self->customLocalesEnabled = $customLocalesEnabled;
        $self->disableCustomizations = $disableCustomizations;
        $self->language = $language;
        $self->handyKey = $handyKey;
        $self->funscriptOffset = $funscriptOffset;
        $self->useStashHostedFunscript = $useStashHostedFunscript;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['sfwContentMode'])) {
            $self->sfwContentMode = $data['sfwContentMode'];
        }
        if (isset($data['imageLightbox'])) {
            $self->imageLightbox = \Aazsamir\Stasphp\Graphql\ConfigImageLightboxResult::fromArray($data['imageLightbox']);
        }
        if (isset($data['disableDropdownCreate'])) {
            $self->disableDropdownCreate = \Aazsamir\Stasphp\Graphql\ConfigDisableDropdownCreate::fromArray($data['disableDropdownCreate']);
        }
        if (isset($data['menuItems'])) {
            $self->menuItems = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['menuItems'] ?? []);
        }
        if (isset($data['soundOnPreview'])) {
            $self->soundOnPreview = $data['soundOnPreview'];
        }
        if (isset($data['wallShowTitle'])) {
            $self->wallShowTitle = $data['wallShowTitle'];
        }
        if (isset($data['wallPlayback'])) {
            $self->wallPlayback = $data['wallPlayback'];
        }
        if (isset($data['showScrubber'])) {
            $self->showScrubber = $data['showScrubber'];
        }
        if (isset($data['maximumLoopDuration'])) {
            $self->maximumLoopDuration = $data['maximumLoopDuration'];
        }
        if (isset($data['noBrowser'])) {
            $self->noBrowser = $data['noBrowser'];
        }
        if (isset($data['notificationsEnabled'])) {
            $self->notificationsEnabled = $data['notificationsEnabled'];
        }
        if (isset($data['autostartVideo'])) {
            $self->autostartVideo = $data['autostartVideo'];
        }
        if (isset($data['autostartVideoOnPlaySelected'])) {
            $self->autostartVideoOnPlaySelected = $data['autostartVideoOnPlaySelected'];
        }
        if (isset($data['continuePlaylistDefault'])) {
            $self->continuePlaylistDefault = $data['continuePlaylistDefault'];
        }
        if (isset($data['showStudioAsText'])) {
            $self->showStudioAsText = $data['showStudioAsText'];
        }
        if (isset($data['css'])) {
            $self->css = $data['css'];
        }
        if (isset($data['cssEnabled'])) {
            $self->cssEnabled = $data['cssEnabled'];
        }
        if (isset($data['javascript'])) {
            $self->javascript = $data['javascript'];
        }
        if (isset($data['javascriptEnabled'])) {
            $self->javascriptEnabled = $data['javascriptEnabled'];
        }
        if (isset($data['customLocales'])) {
            $self->customLocales = $data['customLocales'];
        }
        if (isset($data['customLocalesEnabled'])) {
            $self->customLocalesEnabled = $data['customLocalesEnabled'];
        }
        if (isset($data['disableCustomizations'])) {
            $self->disableCustomizations = $data['disableCustomizations'];
        }
        if (isset($data['language'])) {
            $self->language = $data['language'];
        }
        if (isset($data['handyKey'])) {
            $self->handyKey = $data['handyKey'];
        }
        if (isset($data['funscriptOffset'])) {
            $self->funscriptOffset = $data['funscriptOffset'];
        }
        if (isset($data['useStashHostedFunscript'])) {
            $self->useStashHostedFunscript = $data['useStashHostedFunscript'];
        }

        return $self;
    }
}
