<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Iterators\CustomCollection;
use App\Iterators\Invoice;
use App\Iterators\InvoiceCollection;
use App\Iterators\BetterInvoiceCollection;

$invoiceCollection = new InvoiceCollection([new Invoice(100), new Invoice(160)]);

foreach($invoiceCollection as $key => $item) {
    echo $item->id . ' '. $item->amount . PHP_EOL;
}


/** Have method getIterator() by be haven't call it, it is calling by loops */
$invoiceCollection = new BetterInvoiceCollection([new Invoice(100), new Invoice(160)]);

foreach($invoiceCollection as $key => $item) {
    echo $item->id . ' '. $item->amount . PHP_EOL;
}


$invoiceCollection = new CustomCollection([new Invoice(100), new Invoice(160)]);

foreach($invoiceCollection as $key => $item) {
    echo $item->id . ' '. $item->amount . PHP_EOL;
}