<?php declare(strict_types=1);

namespace App\Iterators;

class Invoice
{
    public int $id;

    public function __construct(public int $amount)
    {
        $this->id = random_int(10000, 999999);
    }
}
