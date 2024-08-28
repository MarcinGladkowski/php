<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\CashMachine;

class NoPinState extends CashState
{
    public function insertCard(): void
    {
        echo 'Insert correct PIN!';
    }

    public function insertPin(string $pin): void
    {
        if ('1234' === $pin) {
            echo 'Correct PIN. Change state to ready';
            $this->cashMachine->changeState(new ReadyState($this->cashMachine));
        } else {
            echo 'Incorrect PIN';
        }
    }

    public function takeCash(int $amount): void
    {
        echo 'Insert correct PIN!';
    }
}