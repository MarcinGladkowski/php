<?php

$a = new Fiber(function (Fiber $b) use (&$a) {
    echo "starting B\n";
    $b->start($a);
});
$b = new Fiber(function (Fiber $a) {
    echo "Resuming A\n";
    $a->resume(); // FiberError: Cannot resume a fiber that is not suspended
});

$a->start($b);