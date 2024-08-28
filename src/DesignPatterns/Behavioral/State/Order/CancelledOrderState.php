<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State\Order;

class CancelledOrderState implements StateInterface
{
    public function name(): string
    {
        return OrderStatusEnum::CANCELLED->value;
    }

    public function cancelOrder(): void
    {
        // TODO: Implement cancelOrder() method.
    }

    public function refundOrder(): void
    {
        // TODO: Implement refundOrder() method.
    }

    public function editOrder(): void
    {
        // TODO: Implement editOrder() method.
    }
}
