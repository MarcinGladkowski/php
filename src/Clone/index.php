<?php

/**
 * Using magic method __clone()
 * The __constructor() is not called when the object is cloning
 */

require_once '../../vendor/autoload.php';

use App\Clone\Invoice;

$invoice1 = new Invoice();

$invoice2 = clone $invoice1;


var_dump($invoice1, $invoice2, $invoice2 === $invoice1);