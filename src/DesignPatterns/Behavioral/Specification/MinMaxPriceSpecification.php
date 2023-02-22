<?php

declare(strict_types=1);
class MinMaxPriceSpecification implements Specification
{
    public function __construct(private int $minPrice, private int $maxPrice)
    {
    }

    public function isSatisfiedBy(Product $item): bool
    {
        if($item->price !== null && $item->price > $this->minPrice && $item->price < $this->maxPrice) {
            return true;
        }

        return false;
    }
}
