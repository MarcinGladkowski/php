<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Creational\AbstractFactory\MarketExample;

interface MarketFeatureFactoryInterface
{
    public function createFeature(): FeatureInterface;
}
