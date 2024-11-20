<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Creational\AbstractFactory\MarketExample;

class UserAccount
{
    private FeatureInterface $feature;

    public function __construct(MarketFeatureFactoryInterface $feature)
    {
        $this->feature = $feature->createFeature();
    }

    public function executeFeature(): string
    {
        return $this->feature->execute();
    }
}
