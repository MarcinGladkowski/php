<?php
/**
 * Concurrency does not the same as simultaneous execution!
 */

echo "Main thread started.\n";

function fetchData($url)
{
    $response = file_get_contents($url);
    return $response;
}

$fibers = [];

$startTime = microtime(true);
// Create fibers for multiple asynchronous tasks.
$fibers[] = new Fiber(function () {
    $response = fetchData("https://api.npoint.io/d96cfc702c24a2992c41");
    $value = Fiber::suspend($response);
    print_r($value . "\n");
});

$fibers[] = new Fiber(function () {
    $response = fetchData("https://api.npoint.io/c116605fac1cb2b75fe9");
    $value = Fiber::suspend($response);
    print_r($value . "\n");
});

$fibers[] = new Fiber(function () {
    $response = fetchData("https://api.npoint.io/327efbf48fbb524bef09");
    $value = Fiber::suspend($response);
    print_r($value . "\n");
});

$captureResponseOnSuspension = [];

// Start all fibers.
foreach ($fibers as $i => $fiber) {
    echo "Fiber $i started.\n";
    $captureResponseOnSuspension[$i] = $fiber->start();
}

// Resume all fibers.
foreach ($fibers as $i => $fiber) {
    echo "Fiber $i resumed.\n";
    $fiber->resume($captureResponseOnSuspension[$i]);
}

echo "Main thread done.\n";

print_r('Fiber: ' . microtime(true) - $startTime);

// Main thread started.
// Fiber 0 started.
// Fiber 1 started.
// Fiber 2 started.

// Fiber 0 resumed.
// {"why":["data1"],"what":"a simple JSON data store"}
// Fiber 1 resumed.
// {"why":["data2"],"what":"a simple JSON data store"}
// Fiber 2 resumed.
// {"why":["data3"],"what":"a simple JSON data store"}
// Main thread done.

$startTime = microtime(true);
// sync way
$urls = [
    "https://api.npoint.io/d96cfc702c24a2992c41",
    "https://api.npoint.io/c116605fac1cb2b75fe9",
    "https://api.npoint.io/327efbf48fbb524bef09"
];

$syncResults = [];
foreach ($urls as $url) {
    $syncResults[] = fetchData($url);
}

print_r($syncResults);
print_r('Loop: ' . microtime(true) - $startTime);

