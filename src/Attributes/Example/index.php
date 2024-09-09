<?php


use Root\Attributes\{Router, Route, RouteAttribute};

require 'vendor/autoload.php';

$router = new Router();
$router->registerController(SampleController::class);
$router->route('/');