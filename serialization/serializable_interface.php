<?php


class User implements \Serializable
{
    private string $name = 'Marcin';
    private string $job = 'programmer';

    public function serialize()
    {
        return serialize(['name' => $this->name, 'job' => $this->job]);
    }

    public function unserialize($serialized)
    {
        $data = unserialize($serialized);
        $this->name = $data['name'];
        $this->job = $data['job'];
    }
}

$user = new User();

$serializedUser = serialize($user);
var_dump($serializedUser);

$unserializedUser = unserialize($serializedUser);
var_dump($unserializedUser);