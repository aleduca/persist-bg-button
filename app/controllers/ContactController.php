<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ContactController
{
    public function index(Request $request, Response $response)
    {
        view('contact');

        return $response;
    }
}
