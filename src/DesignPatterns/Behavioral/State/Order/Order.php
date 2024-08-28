<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State\Order;

class Order
{
    private StateInterface $state;

    public function __construct()
    {
        $this->state = new NewOrderState($this);
    }

    public function setState(StateInterface $state): void
    {
        $this->state = $state;
    }

    public function getState(): StateInterface
    {
        return $this->state;
    }

    public function cancelOrder(): void
    {
        $this->state->cancelOrder();
    }

    public function refundOrder(): void
    {
        $this->state->refundOrder();
    }

    public function editOrder(): void
    {
        $this->state->editOrder();
    }
}
