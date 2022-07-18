<?php

declare(strict_types=1);

/**
 * Value object
 * - wrapping primitives
 * - don't have identity (e.x. id in Entity)
 * - connect primitives in domain objects
 * - using equals method to prevent comparison behaviour (weak: ==, strong: ===)
 * - can be stored using Doctrine using Embedded type or Doctrine self defined Type
 * - meaningful for DDD (one of building block)
 */
class Dimensions
{
    public function __construct(public readonly int $width, public readonly int $height)
    {
    }

    public function equalsTo(Dimensions $dimensions): bool
    {
        return $this->height === $dimensions->height && $this->width === $dimensions->width;
    }
}
