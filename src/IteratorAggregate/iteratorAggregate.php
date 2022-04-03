<?php
/**
 * Implement custom iterator
 */
class CustomIterator implements \IteratorAggregate
{
    private array $data;

    public function __construct()
    {
        $this->data = [0, 12, 33, 44];
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->data);
    }
}

$customIterator = new CustomIterator();

foreach ($customIterator as $value) {
    echo $value . PHP_EOL;
}