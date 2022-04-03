<?php declare(strict_types=1);

namespace App\DependencyInjectionAndContainers;

class InvoiceService
{
    public function __construct(TaxService $taxService)
    {
        echo __CLASS__ . ' has created' . PHP_EOL;
    }
}