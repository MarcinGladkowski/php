<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

/**
 * Example of run php vendor/bin/phpunit src/Testing/TestExample.php
 */
class TestExample extends TestCase
{
    public function testAssertTrue(): void
    {
        self::assertTrue(true);
    }
}