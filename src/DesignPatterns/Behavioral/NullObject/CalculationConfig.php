<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\NullObject;

interface CalculationConfig
{
    public function tax(): int;
}
