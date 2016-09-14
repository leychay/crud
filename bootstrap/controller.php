<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Controller & Routes
 */

//Load main page
$app->get('/', function (Request $request, Response $response) {

    $data['greeting'] = 'Hello there!';

    return $response->getBody()->write(
        $this->view
        ->loadTemplate('home.tpl')
        ->render($data)
    );
});

$app->get('/create', function (Request $request, Response $response) {

    $data['form_title'] = 'Create new Record';

    return $response->getBody()->write(
        $this->view
        ->loadTemplate('form.tpl')
        ->render($data)
    );
});

$app->get('/update', function (Request $request, Response $response) {

    $data['form_title'] = 'Update Record';

    return $response->getBody()->write(
        $this->view
        ->loadTemplate('form.tpl')
        ->render($data)
    );
});

$app->get('/manage', function (Request $request, Response $response) {

    $data['list_title'] = 'Manage All Records';

    return $response->getBody()->write(
        $this->view
        ->loadTemplate('list.tpl')
        ->render($data)
    );
});


/* SAMPLE ROUTE */
/*$app->get('/main/{name}', function (Request $request, Response $response) {

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
*/
