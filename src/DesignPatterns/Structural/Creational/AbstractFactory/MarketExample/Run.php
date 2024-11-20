<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Creational\AbstractFactory\MarketExample;

class Run
{
    public function execute(): void
    {
        $usaFactory = new USAMarketFactory();
        $usaUser = new UserAccount($usaFactory);
        $usaUser->executeFeature();

        $euFactory = new EuMarketFactory();
        $euUser = new UserAccount($euFactory);
        $euUser->executeFeature();
    }
}
