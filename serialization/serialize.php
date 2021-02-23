<?php

/**
 * Basic way: serialize(), unserialize()
 */
class User
{
    private string $name = 'Marcin';
    private string $job = 'programmer';
}

$user = new User();

$serializedUser = serialize($user);
print $serializedUser;

$unserializedUser = unserialize($serializedUser);
var_dump($unserializedUser);

