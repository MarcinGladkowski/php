<?php

require 'AnnotationReader.php';
require 'SampleController.php';
require 'Router.php';
require 'Route.php';

$reader = new AnnotationReader();
$reader->parse(SampleController::class);

$router = new Router($reader->routes);

$router->route('/');