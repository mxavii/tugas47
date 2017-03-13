<?php

$container = $app->getContainer();


$container['view'] = function($container) {
    $view = new \Slim\Views\Twig( __DIR__ . '/../resources/views', [
        'cache' => false
    ]);

    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$container['validator'] = function ($container) {
    return new \App\Validation\Validator;
};

$container['ValidityController'] = function ($container) {
    return new \App\Controllers\ValidityController($container);
};

$app->add(new \App\Middleware\ErrorsValidity($container));

// require __DIR__ . '/../routes/route.php';

$caps = new \Illuminate\Database\Capsule\Manager;
$caps->addConnection($container['settings']['db']);
$caps->setAsGlobal();
$caps->bootEloquent();

//DB Container
$container['db'] = function ($container) use ($caps) {

    return $caps;
};
