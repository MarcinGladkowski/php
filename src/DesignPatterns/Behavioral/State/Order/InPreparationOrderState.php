<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State\Order;

class InPreparationOrderState implements StateInterface
{
    public function __construct(private readonly Order $state)
    {
    }

    public function name(): string
    {
        return OrderStatusEnum::IN_PREPARATION->value;
    }

    public function cancelOrder(): void
    {
        echo 'Cancelling order...' . PHP_EOL;
        $this->state->setState(new CancelledOrderState());
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
