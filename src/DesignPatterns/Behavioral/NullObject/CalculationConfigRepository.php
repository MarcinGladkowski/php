<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\NullObject;

class CalculationConfigRepository
{
    public function configuration(): CalculationConfig
    {
        return new TaxCalculationConfig() ?? new NullTaxCalculationConfig();
    }
}
