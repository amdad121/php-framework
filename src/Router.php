<?php

namespace Amdadulhaq\PhpFramework;

use Amdadulhaq\PhpFramework\Container;

class Router
{
    protected array $routes = [];
    protected Container $container;

    // Add a constructor to accept the container
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function add(string $method, string $uri, $handler): void
    {
        $this->routes[$method][$uri] = $handler;
    }

    /**
     * @throws \ReflectionException
     */
    public function dispatch(string $method, string $uri): void
    {
        if (isset($this->routes[$method][$uri])) {
            $handler = $this->routes[$method][$uri];
            if (is_callable($handler)) {
                call_user_func($handler);
            } elseif (is_array($handler) && count($handler) === 2) {
                list($controller, $method) = $handler;
                $controllerInstance = $this->container->get($controller);
                $controllerInstance->$method();
            }
        } else {
            // Handle 404 Not Found
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}