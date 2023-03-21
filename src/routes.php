<?php

use App\Controllers\ChatController;
use App\Controllers\MessageController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('Hello, World!');
    return $response;
});

$app->group('/api', function (RouteCollectorProxy $group) {

    // Chat routes
    $group->get('/chats', ChatController::class . ':index');
    $group->post('/chats', ChatController::class . ':create');

    // Message routes
    $group->get('/chats/{id}/messages', MessageController::class . ':index');
    $group->post('/chats/{id}/messages', MessageController::class . ':create');

});

?>
