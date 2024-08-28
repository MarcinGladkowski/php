<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge\Conceptual;

class ConcreteImplementationB implements ImplementationInterface
{
    public function operationImplementation(): string
    {
        return 'Concrete implementation ' . __CLASS__;
    }
}
