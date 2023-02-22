<?php

declare(strict_types=1);
class Product
{
    public function __construct(public readonly int $price)
    {
    }
}
