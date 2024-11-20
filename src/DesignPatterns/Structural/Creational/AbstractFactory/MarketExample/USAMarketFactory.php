<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Creational\AbstractFactory\MarketExample;

final class USAMarketFactory implements MarketFeatureFactoryInterface
{
    public function createFeature(): FeatureInterface
    {
        return new UsaMarketFeature();
    }
}
