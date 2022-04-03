<?php


const TEST_SIZE = 1_000_00;

$list = [];
$stop = 0;
$start = microtime(true);

class Item
{
    public $a;
    public $b;
}

for ($i = 0; $i < TEST_SIZE; ++$i) {
    $o = new Item();
    $o->a = random_int(1, 500);
    $o->b = base64_encode(random_bytes(16));
    $list[$i] = $o;
}

ksort($list);

usort($list, function($first, $second) {
    return [$first->a, $first->b] <=> [$second->a, $second->b];
});

$stop = microtime(true);
$memory = memory_get_usage();

printf("Runtime %s\nMemory %s\n", $stop - $start, $memory);
