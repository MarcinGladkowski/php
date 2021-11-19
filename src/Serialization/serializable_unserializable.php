<?php

/**
 * From 7.4
 */

class User
{
    private string $name = 'Marcin';
    private string $job = 'programmer';

    public function __serialize(): array
    {
        return ['programmer_name' => $this->name];
    }

    public function __unserialize(array $data): void
    {
        $this->name = $data['programmer_name'];
    }
}

$user = new User();

$serializedUser = serialize($user);
var_dump($serializedUser);

$unserializedUser = unserialize($serializedUser);
var_dump($unserializedUser);