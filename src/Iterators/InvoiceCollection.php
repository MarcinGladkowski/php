<?php declare(strict_types=1);

namespace App\Iterators;

class InvoiceCollection implements \Iterator
{
    public function __construct(public array $invoices)
    {
    }

    public function current()
    {
        return current($this->invoices);
    }

    public function next()
    {
        return next($this->invoices);
    }

    public function key()
    {
        return key($this->invoices);
    }

    public function valid()
    {
        return $this->current() !== false;
    }

    public function rewind()
    {
        reset($this->invoices);
    }
}