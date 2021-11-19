<?php


const TEST_SIZE = 1_000_00;

$list = [];
$stop = 0;
$start = microtime(true);

class Item
{
    protected $a;
    protected $b;

    public function __construct(int $a, string $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function a() : int { return $this->a; }
    public function b() : string { return $this->b; }
}

for ($i = 0; $i < TEST_SIZE; ++$i) {
    $list[$i] = new Item(random_int(1, 500), base64_encode(random_bytes(16)));
}

ksort($list);

usort($list, function(Item $first, Item $second) {
    return [$first->a(), $first->b()] <=> [$second->a(), $second->b()];
});

$stop = microtime(true);
$memory = memory_get_usage();

printf("Runtime %s\nMemory %s\n", $stop - $start, $memory);
