<?php declare(strict_types=1);

# @see https://stitcher.io/blog/php-8-nullsafe-operator

class Invoice {
    public ?int $number;
}

class User {

    private ?string $name;

    private ?Invoice $invoice = null;

    public function __construct(?string $name = null)
    {
        $this->name = $name;

    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function invoice(): ?Invoice
    {
        return $this->invoice;
    }
}

$user = new User();

$invoiceNumber = $user?->invoice()?->number;
var_dump($invoiceNumber);

# instead of
if ($user !== null) {
    $invoice = $user->invoice();
    if ($invoice !== null) {
        $invoiceNumber = $invoice->number;
        if ($invoiceNumber !== null) {
            ///
        }
    }
}

$someNull = null;
// not falling code!
$someNull?->test();


# For Arrays
$data = [];

var_dump($data['key']?->test); # Warning - not working for keys!
var_dump($data['key']->test ?? null);



