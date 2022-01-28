<?php

declare(strict_types=1);

use App\Controller\ErrorController;
use App\Controller\HeaderMenu;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\AnnotationDirectoryLoader;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

$loader = new AnnotationDirectoryLoader(
    new FileLocator(__DIR__ . '/Controller/'),
    new AnnotatedRouteControllerLoader(
        new AnnotationReader()
    )
);

$routes = $loader->load(__DIR__ . '/Controller/');
$context = RequestContext::fromUri($_SERVER['REQUEST_URI']);
$matcher = new UrlMatcher($routes, $context);

HeaderMenu::render();

try {
    $matcherData = $matcher->match($context->getBaseUrl());
} catch (\Exception $e) {
    $error = new ErrorController();
    $error->index();
    return;
}

$unsetElements = ['_controller', '_route'];


$parameters = array_filter($matcherData, static function ($item) use ($unsetElements) {
    return !in_array($item, $unsetElements, true);
}, ARRAY_FILTER_USE_KEY);

[$controllerName, $action] = explode('::', $matcherData['_controller']);
$controller = new $controllerName;
$controller->$action(...$parameters);
