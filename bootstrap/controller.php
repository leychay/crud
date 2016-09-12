<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Controller & Routes
 */

//Load main page
$app->get('/', function (Request $request, Response $response) {

    $data = array();

    return $response->getBody()->write(
        $this->view
        ->loadTemplate('home.tpl')
        ->render($data)
    );
});

$app->get('/create', function (Request $request, Response $response) {

    $data = array();

    return $response->getBody()->write(
        $this->view
        ->loadTemplate('form.tpl')
        ->render($data)
    );
});

$app->get('/main/{name}', function (Request $request, Response $response) {

    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/log/{string}', function (Request $request, Response $response) {
    $string = $request->getAttribute('string');
    $response->getBody()->write("Test logging string: $string");

    $this->logger->addInfo($string);

    return $response;
});
