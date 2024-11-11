<?php

/**
 * @see https://phpstan.org/blog/generics-by-examples
 *
 *
 * @template T
 */
class Collection
{
    /** @var array<int, T>  */
    public array $items;

    /** @return T */
    public function get(int $key): mixed {
        return $this->items[$key];
    }
    /** @param T $item */
    public function set(mixed $item): void
    {
        $this->items[] = $item;
    }
}


class User {}
class Admin {}

/** @var Collection<User> $users */
$users = new Collection();
$users->set(new Admin());
$users->set(new User());
