<?php

use Sangarius\SlimBlog\Http\Containers\HomeController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/posts', [HomeController::class, 'index']);
    $app->get('/posts/{id}', [HomeController::class, 'show']);
};
