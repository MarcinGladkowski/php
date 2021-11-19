<?php declare(strict_types=1);

namespace App\Iterators;

class Invoice
{
    private int $id;

    public function __construct(private int $amount)
    {
        $this->id = random_int(10000, 999999);
    }
}
