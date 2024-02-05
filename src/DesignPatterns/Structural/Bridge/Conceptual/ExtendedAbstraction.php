<?php

declare(strict_types=1);

class ExtendedAbstraction extends Abstraction
{
    public function operation(): string
    {
        return $this->implementation->operationImplementation();
    }
}
