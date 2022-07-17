<?php

use app\controllers\AboutController;
use app\controllers\ContactController;
use app\controllers\HomeController;
use app\controllers\ProductsController;

return function ($app) {
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/about', [AboutController::class, 'index']);
    $app->get('/products', [ProductsController::class, 'index']);
    $app->get('/contact', [ContactController::class, 'index']);
};
