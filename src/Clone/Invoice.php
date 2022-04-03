<?php declare(strict_types=1);

namespace App\Clone;

class Invoice
{
    private string $id;

    public function __construct()
    {
        $this->id = uniqid('invoice_', true);
    }

    public function __clone(): void
    {
        $this->id = uniqid('invoice_', true);
    }
}