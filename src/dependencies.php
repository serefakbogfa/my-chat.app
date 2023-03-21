<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Psr\Container\ContainerInterface;

$container = $app->getContainer();

// Set up database connection
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => __DIR__ . '/../db/chat_app.db',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Set up controllers
$container['ChatController'] = function (ContainerInterface $container) {
    $chatRepository = $container->get('ChatRepository');
    return new Controllers\ChatController($chatRepository);
};

$container['MessageController'] = function (ContainerInterface $container) {
    $messageRepository = $container->get('MessageRepository');
    return new Controllers\MessageController($messageRepository);
};

// Set up repositories
$container['ChatRepository'] = function (ContainerInterface $container) {
    return new Repositories\ChatRepository;
};

$container['MessageRepository'] = function (ContainerInterface $container) {
    return new Repositories\MessageRepository;
};

?>