<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//Autoload files from composer
require '../vendor/autoload.php';

session_start();

$app = new \Slim\App(require __DIR__ . '/../bootstrap/settings.php');

//Load all the dependencies
require '../bootstrap/dependencies.php';

//Load Main Controller
require '../bootstrap/controller.php';

$app->run();