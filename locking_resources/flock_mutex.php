<?php

$filename = __DIR__ . '/report.txt';
$fh = fopen($filename, 'a');
if (flock($fh, LOCK_EX)) {
    echo 'Doing some really intense work' . PHP_EOL;
    sleep(10);
    echo 'Done' . PHP_EOL;
    flock($fh, LOCK_UN);
    fclose($fh);
}