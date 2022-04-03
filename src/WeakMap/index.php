<?php

/**
 * When using WeakMap ?
 * - It's a map (or dictionary)
 * - We can use objects as a keys
 * - It preventing memory leaks when some objects will be removing form memory and it leaves reverence.
 * - The object cannot be a key in array !
 * - splObjectStorage() from standard library allows us to store objects as keys
 * - The biggest advantage of WeakMap is that situation when object is garbage collected the WeaKMap has weak reference
 *  to this object and this abject will be also removed form WeakMap without programmer action.
 */

/** Using array */
$cache = [];

$object = new class() {
    public int $id = 1234;
};

// $cache[$object] = 'test'; cannot do!

$cache[] = $object;

unset($object);

var_dump($cache); // Still contains removed object.


/** Using splObjectStorage */
$objectToSplStorage = new class() {
    public int $id = 1234;
};

$objectStorage = new splObjectStorage();
$objectStorage->attach($objectToSplStorage);

unset($objectToSplStorage);

var_dump($objectStorage);

/** Using WeakMap */

$objectToWeakMap = new class() {
    public int $id = 5678;
};


$weakCache = new WeakMap();
$weakCache->offsetSet($objectToWeakMap, 'user_2');

unset($objectToWeakMap);

var_dump($weakCache);

/** setting data to WeakMap */
$objectToWeakMapTest = new class() {
    public int $id = 9012;
};


$weakCache->offsetSet($objectToWeakMapTest, null); // need value

$second = new class() {};

$weakCache[$second] = 'test'; // like array access

var_dump($weakCache);