<?php

declare(strict_types=1);

class ConcreteImplementationA implements ImplementationInterface
{

    public function operationImplementation(): string
    {
        return 'Concrete implementation ' . __CLASS__;
    }
}
