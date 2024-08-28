<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\CashMachine;

abstract class CashState
{
    protected CashMachine $cashMachine;

    public function __construct(CashMachine $cashMachine)
    {
        $this->cashMachine = $cashMachine;
    }

    abstract public function insertCard(): void;
    abstract public function insertPin(string $pin): void;
    abstract public function takeCash(int $amount): void;

}