<?php

defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\GlobalArea;
use Concrete\Core\Entity\File\Version;
use Concrete\Core\File\File;
use Concrete\Core\Package\PackageService;
use Concrete\Core\Page\Page;
use Concrete\Core\Site\Service;
use Concrete\Core\Support\Facade\Application;
use Concrete\Core\Support\Facade\Url;
use Concrete\Core\View\View;
use Concrete\Package\SimpleTheme\Controller;
use Concrete\Core\Entity\File\File as FileEntity;

/** @var Page $c */
/** @var View $this */

$app = Application::getFacadeApplication();
/** @var PackageService $pkgService */
/** @noinspection PhpUnhandledExceptionInspection */
$pkgService = $app->make(PackageService::class);
/** @var Service $siteService */
/** @noinspection PhpUnhandledExceptionInspection */
$siteService = $app->make(Service::class);
$site = $siteService->getActiveSiteForEditing();
$siteConfig = $site->getConfigRepository();
$pkgEntity = $pkgService->getByHandle("simple_theme");
/** @var Controller $pkg */
$pkg = $pkgEntity->getController();

$logoUrl = $pkg->getRelativePath() . "/images/logo.svg";

$f = File::getByID($siteConfig->get("simple_theme.regular_logo_file_id"));

if ($f instanceof FileEntity) {
    $fv = $f->getApprovedVersion();

    if ($fv instanceof Version) {
        $logoUrl = $fv->getURL();
    }
}

$homePage = Page::getByID(Page::getHomePageID($c::getCurrentPage()));
/** @noinspection PhpUnhandledExceptionInspection */

?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <a href="<?php echo Url::to($homePage) ?>" class="logo">
                            <img src="<?php echo $logoUrl; ?>"
                                 alt="<?php echo h($homePage->getCollectionName()) ?>">
                        </a>

                        <?php
                        $a = new GlobalArea('Footer Title');
                        $a->display();
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="navigation">
                        <?php
                        $a = new GlobalArea('Footer Navigation');
                        $a->display();
                        ?>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="copyright">
                        <?php
                        $a = new GlobalArea('Footer Copyright');
                        $a->display();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php $this->inc("elements/footer_bottom.php"); ?>