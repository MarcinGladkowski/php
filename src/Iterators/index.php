<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Iterators\Invoice;


foreach((new Invoice(100)) as $key => $item) {
    echo 'Key: ' . $key . ' value: ' . $item . PHP_EOL;
}