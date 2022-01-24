<?php


use App\DependencyInjectionAndContainers\App;
use App\DependencyInjectionAndContainers\InvoiceService;
use App\DependencyInjectionAndContainers\TaxService;

require_once __DIR__ . '/../../vendor/autoload.php';

$app = new App(true);
//$taxService = $app::$container->get(TaxService::class);
//var_dump(get_class($taxService));


$invoiceService = $app::$container->get(InvoiceService::class);
var_dump(get_class($invoiceService));
