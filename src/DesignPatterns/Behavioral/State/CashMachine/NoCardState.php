<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\CashMachine;

class NoCardState extends CashState
{
    public function insertCard(): void
    {
        if ($this->cashMachine->availableCash() <= 100) {
            $this->cashMachine->changeState(new NoCashState($this->cashMachine));
            echo 'No cash in cash machine';
            return;
        }

        $this->cashMachine->changeState(new NoPinState($this->cashMachine));
    }

    public function insertPin(string $pin): void
    {
        echo 'Insert card please';
    }

    public function takeCash(int $amount): void
    {
        echo 'Insert card please';
    }
}
