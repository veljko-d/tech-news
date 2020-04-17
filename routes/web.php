<?php

use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\HomeController;
use App\Controllers\PostController;

return [
    'get::' => [
        'controller' => HomeController::class,
        'method'     => 'index',
    ],
    'get::login' => [
        'controller' => LoginController::class,
        'method'     => 'getForm',
    ],
    'post::login' => [
        'controller' => LoginController::class,
        'method'     => 'login',
    ],
    'post::logout' => [
        'controller' => LoginController::class,
        'method'     => 'logout',
    ],
    'get::register' => [
        'controller' => RegisterController::class,
        'method'     => 'getForm',
    ],
    'post::register' => [
        'controller' => RegisterController::class,
        'method'     => 'register',
    ],
    'get::posts' => [
        'controller' => PostController::class,
        'method'     => 'index',
    ],
    'get::posts/create' => [
        'controller' => PostController::class,
        'method'     => 'create',
        'login'      => true,
    ],
    'post::posts' => [
        'controller' => PostController::class,
        'method'     => 'store',
        'login'      => true,
    ],
    'get::posts/:slug' => [
        'controller' => PostController::class,
        'method'     => 'show',
        'params'     => [
            'slug' => 'string',
        ],
    ],
    'get::posts/:slug/edit' => [
        'controller' => PostController::class,
        'method'     => 'edit',
        'login'      => true,
        'params'     => [
            'slug' => 'string',
        ],
    ],
    'post::posts/:slug/delete' => [
        'controller' => PostController::class,
        'method'     => 'destroy',
        'login'      => true,
        'params'     => [
            'slug' => 'string',
        ],
    ],
];
