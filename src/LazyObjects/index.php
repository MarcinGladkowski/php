<?php

/**
 * What is difference between NewLazyProxy and NewLazyGhost initialization ?
 */

class Example {
    public function __construct(public int $prop) {
        echo __METHOD__, "\n";
    }

    public function doSomething(): string
    {
        return 'Property: ' . $this->prop;
    }
}

$reflector = new ReflectionClass(Example::class);
$object = $reflector->newLazyProxy(function (Example $object) {
    return new Example(1);
});


// Triggers initialization, and forwards the property fetch to the real instance
//var_dump($object->prop);
var_dump($object->doSomething());