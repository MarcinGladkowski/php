<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State\Order;

readonly class NewOrderState implements StateInterface
{
    public function __construct(private Order $state)
    {
    }

    public function name(): string
    {
        return OrderStatusEnum::NEW->value;
    }

    public function cancelOrder(): void
    {
        echo 'Cancelling order...' . PHP_EOL;
        $this->state->setState(new CancelledOrderState());
    }

    public function refundOrder(): void
    {
        throw new \DomainException("Cannot refund new order");
    }

    public function editOrder(): void
    {
        echo 'Order updated' . PHP_EOL;
    }
}
