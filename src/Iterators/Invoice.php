<?php declare(strict_types=1);

class Invoice
{
    private int $id;

    public function __construct(private int $amount)
    {
        $this->id = random_int(10000, 999999);
    }
}


foreach((new Invoice(100)) as $key => $item) {
    echo 'Key: ' . $key . ' value: ' . $item . PHP_EOL;
}