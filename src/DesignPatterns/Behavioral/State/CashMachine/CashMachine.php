<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\CashMachine;

class CashMachine
{
    private CashState $state;

    protected int $availableCash = 1000;

    #[Pure] public function __construct()
    {
        $this->state = new NoCardState($this);
    }

    public function changeState(CashState $state): void
    {
        $this->state = $state;
    }

    public function insertCard(): void
    {
        $this->state->insertCard();
    }

    public function insertPin(string $pin): void
    {
        $this->state->insertPin($pin);
    }

    public function takeCash(int $amount): void
    {
        $this->state->takeCash($amount);
    }

    public function availableCash(): int
    {
        return $this->availableCash;
    }

    public function decrease(int $amount): void
    {
        $this->availableCash -= $amount;
    }
}