<?php

class Meal
{}

$cooking = new Fiber(function (array $steps): Meal {
    Fiber::suspend('Ready to cook.');
    foreach ($steps as $step) {
        // Perform step.
        Fiber::suspend($step . " finished");
    }

    return new Meal();
});

$cleaning = new Fiber(function () {
    Fiber::suspend('Waiting for something to clean.');

    while (true) {
        // Cleaning.
        Fiber::suspend('Finished cleaning');
    }
});

$cooking->start(['chopping', 'mixing', 'cooking', 'plating']); // Ready to cook.
$cleaning->start(); // Waiting for something to clean.

// Alternate between cooking and cleaning.
while (!$cooking->isTerminated()) {
    printf("[Cooking] %s\n", $cooking->resume());
    printf("[Cleaning] %s\n", $cleaning->resume());
}

$meal = $cooking->getReturn();