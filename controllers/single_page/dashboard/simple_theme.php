<?php

namespace Concrete\Package\SimpleTheme\Controller\SinglePage\Dashboard;

use Concrete\Core\Page\Controller\DashboardPageController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class SimpleTheme extends DashboardPageController
{
    public function view(): RedirectResponse|Response
    {
        return $this->buildRedirectToFirstAccessibleChildPage();
    }
}
