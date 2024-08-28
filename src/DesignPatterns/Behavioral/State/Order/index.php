<?php

declare(strict_types=1);

require '../../../../../vendor/autoload.php';

use App\DesignPatterns\Behavioral\State\Order\Order;

$order = new Order();
$order->cancelOrder();