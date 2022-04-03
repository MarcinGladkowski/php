<?php

/**
 * __get() & __set()
 * To manage properties in class/instance
 * Execute when
 */
class SomeGetAndSetClass
{
    private int $salary = 100;

    public function __get(string $name)
    {
        return "'${name}' is not available \n";
    }

    public function __set(string $name, $value): void
    {
        // TODO: Implement __set() method.
    }
}

$someGetAndSetImplementation = new SomeGetAndSetClass();
echo $someGetAndSetImplementation->price;
echo $someGetAndSetImplementation->otherProperty;

/**
 * Hack how to get access to private/protected property - do not do it!
 */
class SomeGetClass
{
    private int $count = 100;

    public function __get(string $name)
    {
        return $this->count;
    }
}


/**
 * __sleep(), __wakeup()
 */
class SomeSleepWakeupClass
{
    private int $count = 100;
    private string $name = 'developer';

    public function __sleep(): array
    {
        return ['count'];
    }

    public function __wakeup(): void
    {

    }

}

$sleepWakeup = new SomeSleepWakeupClass();
var_dump(serialize($sleepWakeup));

/**
 * PHP does not allow overloading methods in 'classic' way like in C, C#, Java etc.
 * but is possible to implement it by __call() magic method.
 *
 * For static context exists magic method __callStatic()
 *
 * The method is executing when we want to call not exists or not available (private/protected)
 * method.
 *
 *
 * Using this __call() method we can implement overloading methods with the same signature but different
 * parameters.
 *
 * Useful to implement Interceptor design pattern.
 */

class SomeCallMagic
{
    public function __call(string $name, array $arguments)
    {
        return "Called not existed method!";
    }
}
