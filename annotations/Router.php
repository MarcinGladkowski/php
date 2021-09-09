<?php declare(strict_types=1);

class Router
{
    protected array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function route(string $path)
    {
        foreach ($this->routes as $route) {
            if ($path === $route->getPath()) {
                echo $route->execute() . PHP_EOL;
                break;
            }
        }
    }
}