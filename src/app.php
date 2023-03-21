
<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$app = AppFactory::create();

require __DIR__ . '/dependencies.php';
require __DIR__ . '/routes.php';

$app->run();
?>