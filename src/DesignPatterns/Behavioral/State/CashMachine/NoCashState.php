<?php declare(strict_types=1);

class NoCashState extends CashState
{
    public function insertCard(): void
    {
        echo 'No cash in cash machine. Come back later, please';
    }

    public function insertPin(string $pin): void
    {
        echo 'No cash in cash machine. Come back later, please';
    }

    public function takeCash(int $amount): void
    {
        echo 'No cash in cash machine. Come back later, please';
    }
}

