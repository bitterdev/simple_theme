<?php

namespace Bitter\SimpleTheme\Routing;

use Bitter\SimpleTheme\API\V1\Middleware\FractalNegotiatorMiddleware;
use Bitter\SimpleTheme\API\V1\Configurator;
use Concrete\Core\Routing\RouteListInterface;
use Concrete\Core\Routing\Router;

class RouteList implements RouteListInterface
{
    public function loadRoutes(Router $router)
    {
        $router
            ->buildGroup()
            ->setNamespace('Concrete\Package\SimpleTheme\Controller\Dialog\Support')
            ->setPrefix('/ccm/system/dialogs/simple_theme')
            ->routes('dialogs/support.php', 'simple_theme');
    }
}