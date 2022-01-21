<?php

use App\DependencyInjectionAndContainers\App;
use App\DependencyInjectionAndContainers\InvoiceService;

require_once __DIR__ . '/../../vendor/autoload.php';

$app = new App();
$invoiceService = $app::$container->get(InvoiceService::class);