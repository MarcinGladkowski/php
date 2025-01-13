<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\NullObject;

final class TaxCalculationConfig implements CalculationConfig
{
    public function tax(): int
    {
        return 23;
    }
}
