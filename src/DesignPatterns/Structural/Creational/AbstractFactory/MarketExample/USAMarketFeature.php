<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Creational\AbstractFactory\MarketExample;

final class USAMarketFeature implements FeatureInterface
{

    public function execute(): string
    {
        return 'Functionality for USA market';
    }
}
