<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Creational\AbstractFactory\MarketExample;

final class EuMarketFactory implements MarketFeatureFactoryInterface
{

    public function createFeature(): FeatureInterface
    {
        return new EuMarketFeature();
    }
}
