<?php declare(strict_types=1);

namespace App\Iterators;

use ArrayIterator;

class BetterInvoiceCollection implements \IteratorAggregate
{
    private int $key;

    public function __construct(public array $invoices) {}

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->invoices);
    }
}