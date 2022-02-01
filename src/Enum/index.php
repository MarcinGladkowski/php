<?php

use App\Enum\InvoiceStatus;

require_once __DIR__ . '/../../vendor/autoload.php';

var_dump(InvoiceStatus::Paid);
var_dump(is_object(InvoiceStatus::Paid));

$status = InvoiceStatus::Paid;

var_dump($status->name);
var_dump($status->value);

var_dump(InvoiceStatus::tryFrom(3)->name);