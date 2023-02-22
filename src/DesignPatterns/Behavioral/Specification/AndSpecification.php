<?php

declare(strict_types=1);

class AndSpecification implements Specification
{
    /**
     * @param Specification[] $specifications
     */
    public function __construct(private readonly array $specifications)
    {
    }

    public function isSatisfiedBy(Product $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }
        return true;
    }
}
