<?php

/**
 * not for common usage - some profiling performance issues
 */

function onTick() {
    echo 'Tick' . PHP_EOL;
}

register_tick_function('onTick');

declare(ticks=1);


function sum($a, $b) {
    return $a + $b;
}

$i = 0;
while ($i < 10) {
    echo $i++ . PHP_EOL;
}