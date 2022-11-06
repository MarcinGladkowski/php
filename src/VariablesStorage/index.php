<?php

class Item
{
    public function __destruct()
    {
        echo 'destructing Item';
    }
}

$item1 = new Item();
$item2 = $item1;

unset($item1);

// the only destructing of one object will be run, after unset $item1, the keep existing in memory (copy)