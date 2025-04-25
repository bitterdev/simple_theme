<?php

defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\GlobalArea;
use Concrete\Core\Page\Page;
use Concrete\Core\View\View;

/** @var Page $c */
/** @var View $this */
 /** @noinspection PhpUnhandledExceptionInspection */
$this->inc("elements/header_top.php"); ?>

<header>
    <section class="language-switcher">
        <?php
        $a = new GlobalArea("Language Switcher");
        $a->display();
        ?>
    </section>

    <section class="header-navigation">
        <?php
        $a = new GlobalArea("Header Navigation");
        $a->display();
        ?>
    </section>
</header>
