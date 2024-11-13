<?php

use Psr\Container\ContainerInterface;

return function (ContainerInterface $container) {
    $container->set('settings', fn() => [
        "displayErrorDetails" => true,
        "logErrors" => true,
        "logErrorDetails" => true,
        "db" => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'slim_blog',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],
    ]);

    $container->set(PDO::class, function (ContainerInterface $c) {
        $settings = $c->get('settings')['db'];
        $dsn = "{$settings['driver']}:host={$settings['host']};dbname={$settings['database']};charset={$settings['charset']}";
        return new PDO($dsn, $settings['username'], $settings['password']);
    });

    $container->set(Sangarius\SlimBlog\Models\Post::class, function (ContainerInterface $c) {
        return new Sangarius\SlimBlog\Models\Post($c->get(PDO::class));
    });

    $container->set(Sangarius\SlimBlog\Http\Containers\HomeController::class, function (ContainerInterface $c) {
        return new Sangarius\SlimBlog\Http\Containers\HomeController($c->get(Sangarius\SlimBlog\Models\Post::class));
    });
};
