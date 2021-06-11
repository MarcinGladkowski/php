<?php

class HomepageAction
{
    public function __invoke()
    {
        echo "Hello world";
    }
}

class AdminAction
{
    public function __invoke()
    {
        echo 'Admin section';
    }
}

$routes = [
  '/' => HomepageAction::class,
  '/admin' => AdminAction::class,
];

if (!empty($routes[$_SERVER['REQUEST_URI']])) {
    $className = $routes[$_SERVER['REQUEST_URI']];
    $action = new $className();
    $action();
}

// use class as callable
class Square
{
    public function __invoke(int $num)
    {
        return $num * $num;
    }
}

function addAndModify(int $num1, int $num2, callable $modifier) {
    $total = $num2 + $num1;
    return $modifier($total);
}