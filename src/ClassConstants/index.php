<?php

declare(strict_types=1);

/**
 * Useful to not changed data
 * Prevent to hard coding data (avoid typos)
 */

use App\ClassConstans\Transaction;

require_once __DIR__  . '/../../vendor/autoload.php';

$transaction = new Transaction();

echo Transaction::STATUS_PAID;
echo $transaction::STATUS_PAID;
