<?php

use App\Controllers\RegisterController;
use Slim\Views\Twig;

// Assuming Twig and controller instances are already created in index.php
return function ($app) {
    // Route to display the registration form
    $app->get('/register', RegisterController::class . ':registerPage');
    $app->post('/register', RegisterController::class . ':submitForm');

};
