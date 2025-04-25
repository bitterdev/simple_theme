<?php

defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Page\Page;
use Concrete\Core\View\View;
use Concrete\Core\Support\Facade\Application;
use Concrete\Core\Html\Service\Html;

/** @var Page $c */
/** @var View $view */

$app = Application::getFacadeApplication();
/** @var $htmlHelper Html */
$htmlHelper = $app->make(Html::class);
?>

</div>

<?php /** @noinspection PhpUnhandledExceptionInspection */
View::element('footer_required'); ?>

<?php echo $htmlHelper->javascript($view->getThemePath() . "/js/main.js"); ?>
</body>
</html>