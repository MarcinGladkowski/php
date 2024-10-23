<?php

/**
 * Add test with DS data structure
 */
$size = 1_000_000;
$sizeLoop = range(0 , $size);

$fixedArray = new SplFixedArray($size);
for ($i = 0; $i < $size; ++$i) {
    $fixedArray[$i] = $i++;
}

echo 'SplFixedArray memory consumption - ' . memory_get_usage() / 1024 / 1024 . ' MB' . PHP_EOL;
unset($fixedArray);

$commonArray = [];
for ($i = 0; $i < $size; ++$i) {
    $commonArray[$i] = $i;
}

echo 'typical array memory consumption - ' . memory_get_usage() / 1024 / 1024 . ' MB'. PHP_EOL;
