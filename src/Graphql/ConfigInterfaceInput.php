<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class ConfigInterfaceInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?bool $sfwContentMode;

    /** @var array<string> */
    public ?array $menuItems;
    public ?bool $soundOnPreview;
    public ?bool $wallShowTitle;
    public ?string $wallPlayback;
    public ?bool $showScrubber;
    public ?int $maximumLoopDuration;
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
    public ?ConfigImageLightboxInput $imageLightbox;
    public ?ConfigDisableDropdownCreateInput $disableDropdownCreate;
    public ?string $handyKey;
    public ?int $funscriptOffset;
    public ?bool $useStashHostedFunscript;
    public ?bool $noBrowser;
    public ?bool $notificationsEnabled;

    /**
     * @param array<string> $menuItems
     */
    public static function new(
        ?bool $sfwContentMode = null,
        ?array $menuItems = null,
        ?bool $soundOnPreview = null,
        ?bool $wallShowTitle = null,
        ?string $wallPlayback = null,
        ?bool $showScrubber = null,
        ?int $maximumLoopDuration = null,
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
        ?ConfigImageLightboxInput $imageLightbox = null,
        ?ConfigDisableDropdownCreateInput $disableDropdownCreate = null,
        ?string $handyKey = null,
        ?int $funscriptOffset = null,
        ?bool $useStashHostedFunscript = null,
        ?bool $noBrowser = null,
        ?bool $notificationsEnabled = null,
    ): self {
        $self = new self();
        $self->sfwContentMode = $sfwContentMode;
        $self->menuItems = $menuItems;
        $self->soundOnPreview = $soundOnPreview;
        $self->wallShowTitle = $wallShowTitle;
        $self->wallPlayback = $wallPlayback;
        $self->showScrubber = $showScrubber;
        $self->maximumLoopDuration = $maximumLoopDuration;
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
        $self->imageLightbox = $imageLightbox;
        $self->disableDropdownCreate = $disableDropdownCreate;
        $self->handyKey = $handyKey;
        $self->funscriptOffset = $funscriptOffset;
        $self->useStashHostedFunscript = $useStashHostedFunscript;
        $self->noBrowser = $noBrowser;
        $self->notificationsEnabled = $notificationsEnabled;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['sfwContentMode'])) {
            $self->sfwContentMode = $data['sfwContentMode'];
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
        if (isset($data['imageLightbox'])) {
            $self->imageLightbox = \Aazsamir\Stasphp\Graphql\ConfigImageLightboxInput::fromArray($data['imageLightbox']);
        }
        if (isset($data['disableDropdownCreate'])) {
            $self->disableDropdownCreate = \Aazsamir\Stasphp\Graphql\ConfigDisableDropdownCreateInput::fromArray($data['disableDropdownCreate']);
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
        if (isset($data['noBrowser'])) {
            $self->noBrowser = $data['noBrowser'];
        }
        if (isset($data['notificationsEnabled'])) {
            $self->notificationsEnabled = $data['notificationsEnabled'];
        }

        return $self;
    }
}
