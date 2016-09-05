<?php

/**
 * Configuration files
 */
$dotenv = new Dotenv\Dotenv(__DIR__.'/../config/');
$dotenv->load();

return
[
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
    ],
    'database' => [
        'host' => getenv('DB_HOST'),
        'user' => getenv('DB_USERNAME'),
        'pass' => getenv('DB_PASSWORD'),
        'db' => getenv('DB_DATABASE'),
    ],
    'twig' => [
        'template_path' => __DIR__ . '/../templates',
        'cache_path' => __DIR__.'/../cache',
        'debug' => getenv('DEBUG'),
    ],
    'monolog' => [
        'name' => getenv('LOGGER_NAME'),
        'path' => __DIR__.'/../logs/app.log',
    ],
    'appconf' => [
        'name' => getenv('APP_NAME'),
    ],
];
