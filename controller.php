<?php

namespace Concrete\Package\SimpleTheme;

use Bitter\SimpleTheme\Provider\ServiceProvider;
use Concrete\Core\Package\Package;
use Concrete\Core\Entity\Package as PackageEntity;

class Controller extends Package
{
    protected string $pkgHandle = 'simple_theme';
    protected string $pkgVersion = '0.1.1';
    protected $appVersionRequired = '9.0.0';
    protected $pkgAllowsFullContentSwap = true;
    protected $pkgAutoloaderRegistries = [
        'src/Bitter/SimpleTheme' => 'Bitter\SimpleTheme',
    ];

    public function getPackageDescription(): string
    {
        return t('Simple Theme is a minimalist Concrete CMS theme optimized for one-pagers, perfect for short and sharp presentations.');
    }

    public function getPackageName(): string
    {
        return t('Simple Theme ');
    }

    public function on_start()
    {
        /** @var ServiceProvider $serviceProvider */
        $serviceProvider = $this->app->make(ServiceProvider::class);
        $serviceProvider->register();
    }

    public function install(): PackageEntity
    {
        $pkg = parent::install();
        $this->installContentFile("data.xml");
        return $pkg;
    }

    public function upgrade()
    {
        parent::upgrade();
        $this->installContentFile("data.xml");
    }
}
