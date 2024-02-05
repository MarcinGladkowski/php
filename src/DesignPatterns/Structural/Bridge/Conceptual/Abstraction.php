<?php

declare(strict_types=1);

class Abstraction
{

    public function __construct(
        protected readonly ImplementationInterface $implementation
    ) {
    }

    public function operation(): string
    {
        return $this->implementation->operationImplementation();
    }
}
