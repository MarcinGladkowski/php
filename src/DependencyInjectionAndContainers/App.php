<?php

declare(strict_types=1);

namespace App\DependencyInjectionAndContainers;

class App
{
    public static $container;

    public function __construct(bool $autowiring = false)
    {
        self::$container = $autowiring ? new AutowiringContainer() : new Container();

        if (!$autowiring) {
            // load normal configuration
            self::$container->set(InvoiceService::class, static function($c) {
                return new InvoiceService(
                    $c->get(TaxService::class)
                );
            });

            self::$container->set(TaxService::class, fn() => new TaxService());
        }

    }
}