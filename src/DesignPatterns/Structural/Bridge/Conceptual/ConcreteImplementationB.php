<?php

declare(strict_types=1);

class ConcreteImplementationB implements ImplementationInterface
{
    public function operationImplementation(): string
    {
        return 'Concrete implementation ' . __CLASS__;
    }
}
