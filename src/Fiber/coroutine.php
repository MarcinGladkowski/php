<?php

$coroutine = new Fiber(function () {
    $received = Fiber::suspend('Hello from the Coroutine');
    Fiber::suspend('Received: ' . $received);
});

$result = $coroutine->start();
var_dump($result); // Hello from the Coroutine
$next = $coroutine->resume('Hello from the code'); // pass value to the next suspension point
var_dump($next); // Received: Hello from the code