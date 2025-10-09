<?php

use Amdadulhaq\PhpFramework\Container;
use Amdadulhaq\PhpFramework\Router;
use App\Controllers\HomeController;
use App\Controllers\ProductController;

$container = new Container();
$container->set(App\Models\Product::class, fn() => new App\Models\Product());

$router = new Router($container);

// Web routes
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/products', [ProductController::class, 'index']);
$router->add('GET', '/about', function () {
    echo "About Us page using Closure.";
});

// API routes
$router->add('GET', '/api/user', function () {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['name' => 'John Doe', 'age' => 30]);
});

// Dispatch the request
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->dispatch($requestMethod, $requestUri);