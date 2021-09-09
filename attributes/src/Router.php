<?php declare(strict_types=1);

namespace Root\Attributes;

use ReflectionClass;

class Router
{
    protected $routes;

    /**
     * @throws \ReflectionException
     */
    public function registerController(string $controller)
    {
        $refClass = new ReflectionClass($controller);

        foreach ($refClass->getMethods() as $method) {
            $attributes = $method->getAttributes(
                RouteAttribute::class
            );
            $instance = $attributes[0]->newInstance();
            $this->routes[$instance->path] = new Route(
                $instance->path,
                [new $controller, $method->getName()]
            );
        }
    }

    public function route(string $path)
    {
        foreach ($this->routes as $route) {
            if ($path === $route->path) {
                echo $route->execute();
            }
        }
    }
}