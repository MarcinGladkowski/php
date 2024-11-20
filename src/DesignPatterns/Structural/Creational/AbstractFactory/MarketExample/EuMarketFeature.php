<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Creational\AbstractFactory\MarketExample;

class EuMarketFeature implements FeatureInterface
{

    public function execute(): string
    {
        return 'Functionality for EU market';
    }
}
