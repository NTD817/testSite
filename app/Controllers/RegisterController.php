<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class RegisterController
{
    private $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    // Method to show the form
    public function registerPage(Request $request, Response $response, $args): Response
    {
        return $this->view->render($response, 'register.twig');
    }

    // Method to handle form submission and display data
    public function submitForm(Request $request, Response $response, $args): Response
    {
        $data = $request->getParsedBody();
        return $this->view->render($response, 'display.twig', ['data' => $data]);
    }
}
