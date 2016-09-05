<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Controller & Routes
 */

//Load main page
$app->get('/', function (Request $request, Response $response) {

    $data['page'] = 'ssup.html';
    $data['appname'] = $this->get('appconf')['name'];

    return $response->getBody()->write(
        $this->view
        ->loadTemplate('index.html')
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
