<?php declare(strict_types=1);

class ReadyState extends CashState
{
    public function insertCard(): void
    {
        echo 'Take a cash!';
    }

    public function insertPin(string $pin): void
    {
        echo 'Take a cash!';
    }

    public function takeCash(int $amount): void
    {
        if ($amount < $this->cashMachine->availableCash()) {
            $this->cashMachine->decrease($amount);
            $this->cashMachine->changeState(new NoCardState($this->cashMachine));
            echo 'Get your money!';
            return;
        }
        $this->cashMachine->changeState(new NoCashState($this->cashMachine));
    }
}