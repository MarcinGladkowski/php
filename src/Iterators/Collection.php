<?php declare(strict_types=1);

namespace App\Iterators;

use ArrayIterator;

class Collection implements \IteratorAggregate
{
    public function __construct(public array $items) {}

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }
}