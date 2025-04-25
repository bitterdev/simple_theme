<?php

namespace Concrete\Package\SimpleTheme\Theme\SimpleTheme;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap5';

    public function getThemeName(): string
    {
        return t('Simple Theme ');
    }

    public function getThemeDescription(): string
    {
        return t('A sleek Concrete CMS theme built for business portfolios, developed for version 9 and based on Bedrock.');
    }

    public function registerAssets()
    {
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'bootstrap');
        $this->requireAsset('vue');
    }

}
