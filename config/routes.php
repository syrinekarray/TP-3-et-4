<?php
    use App\Controller\HomeController;
    use App\Controller\ArticlesController;
    use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

    return function (RoutingConfigurator $routes) {
        $routes->add('home', '/home')->controller([HomeController::class, 'index']);
        $routes->add('articles', '/articles')->controller([ArticlesController::class, 'index']);
    };
?>