<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$app = AppFactory::create();

// Set up Twig for templates
$twig = Twig::create(__DIR__ . '/../resources/views', ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

(require __DIR__ . '/../src/routes.php')($app);


// Run the app
$app->run();
