<?php


require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\App([
    'settings' => [
        'determineRouteBeforeAppMiddleware' => true,

        'displayErrorDetails' => true,

        'addContentLengthHeader' => false,

        'lang'	=> [
            'default'	=> 'id',
        ],

        'db' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'kendaraan',
            'username'  => 'root',
            'password'  => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

        'view'	=> [
            'path'	=> '../../views',
            'twig'	=> [
                'cache'	=> false,
            ],
	],
    ]
]);
