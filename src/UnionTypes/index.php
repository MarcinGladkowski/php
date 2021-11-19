<?php declare(strict_types=1);


function fooBar(int|string $argument) {
    var_dump($argument);
}

fooBar(30);
fooBar('Test');

/**
 * Works but we also can use (?)
 * @param int|null $argument
 */
function fooBar2(int|null $argument) {}
function fooBar3(?int $argument) {}

class User {}
class SpecialUser {}

/**
 * It's possible to use union types with typing classes but
 * it doesn't make sense because for classes we should use full OOP
 * @param User|SpecialUser $user
 */
function processUser(User|SpecialUser $user) {}

processUser(new User);
processUser(new SpecialUser());