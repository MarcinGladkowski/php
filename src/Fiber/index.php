<?php

$fiber = new Fiber(function (): void {
    $value = Fiber::suspend('fiber'); // suspend value
    echo "Value used to resume fiber: ", $value, "\n";
});

$value = $fiber->start();

echo "Value from fiber suspending: ", $value, "\n";

$fiber->resume('test'); // resume value

// output
/*
Value from fiber suspending: fiber
Value used to resume fiber: test
*/