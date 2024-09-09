<?php declare(strict_types=1);

namespace Root\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class RouteAttribute
{
    public function __construct(public string $path) {}
}