<?php


use App\DependencyInjectionAndContainers\App;
use App\DependencyInjectionAndContainers\InvoiceService;
use App\DependencyInjectionAndContainers\PaymentService;
use App\DependencyInjectionAndContainers\PaymentServiceInterface;
use App\DependencyInjectionAndContainers\TaxService;

require_once __DIR__ . '/../../vendor/autoload.php';

$app = new App(true);
//$taxService = $app::$container->get(TaxService::class);
//var_dump(get_class($taxService));


$app::$container->set(PaymentServiceInterface::class, PaymentService::class);

$invoiceService = $app::$container->get(InvoiceService::class);
var_dump(get_class($invoiceService));
$paymentService = $app::$container->get(PaymentServiceInterface::class);
var_dump(get_class($paymentService));