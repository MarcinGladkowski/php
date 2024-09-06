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


/**
 * Based on https://www.hashbangcode.com/article/fibers-php-81
 *
 * Fibers do not run your code in Parallel. Fibers are using green threats or virtual threats
 * scheduled by PHP VM - not by underlying operating system (fully controlled by PHP)
 */


### Stream a webpage example
$fiber = new Fiber(function ($stream): void {
    while (!feof($stream)) {
        $content = fread($stream, 50);
        Fiber::suspend($content);
    }
});

$stream = fopen("https://some-page:", 'rb');
stream_set_blocking($stream, false);

$contents = $fiber->start($stream);

while (!$fiber->isTerminated()) {
    $contents .= $fiber->resume();
}

fclose($stream);

### Multiple file delete
$fiber = new Fiber(function (array $files): void {
   foreach ($files as $file) {
       unlink($file);
       Fiber::suspend($file);
   }
});

$files = [
    'file1.txt',
    'file2.txt',
    'file2.txt',
];

$fiber = $fiber->start($files);

while (!$fiber->isTerminated()) {
    $fiber->resume();
}


