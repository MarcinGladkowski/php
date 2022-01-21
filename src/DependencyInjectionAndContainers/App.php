<?php

declare(strict_types=1);

namespace App\DependencyInjectionAndContainers;

class App
{
    public static $container;

    public function __construct()
    {
        self::$container = new Container();

        self::$container->set(InvoiceService::class, static function($c) {
           return new InvoiceService(
               $c->get(TaxService::class)
           );
        });

        self::$container->set(TaxService::class, fn() => new TaxService());
    }
}