<?php declare(strict_types=1);

namespace App\DependencyInjectionAndContainers;

class TaxService
{
    public function __construct()
    {
        echo __CLASS__ . ' has created' . PHP_EOL;
    }
}
