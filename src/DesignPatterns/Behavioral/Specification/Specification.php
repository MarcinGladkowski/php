<?php

declare(strict_types=1);

interface Specification
{
    public function isSatisfiedBy(Product $item): bool;
}
