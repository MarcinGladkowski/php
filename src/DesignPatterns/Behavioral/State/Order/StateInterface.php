<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State\Order;

use Order;

interface StateInterface
{
    public function name(): string;

    public function cancelOrder(): void;

    public function refundOrder(): void;

    public function editOrder(): void;
}
