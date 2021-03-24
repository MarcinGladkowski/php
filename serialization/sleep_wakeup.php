<?php

/**
 * __sleep() - whitelist which data be serialized when object is serialize()
 * __wake() - what do when object is unserialize()
 */

class User
{
    private string $name = 'Marcin';
    private string $job = 'programmer';

    public function __wakeup(): void
    {
        $this->name = 'test';
    }

    public function __sleep(): array
    {
        return ['name', 'job'];
    }
}

$user = new User();


$serializedUser = serialize($user);
var_dump($serializedUser);

$unserializedUser = unserialize($serializedUser);
var_dump($unserializedUser);
