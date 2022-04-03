<?php

/**
 * The main purpose to using anonymous classes is testing
 * - We can fast initialize object with some interface (e.g) and inject to other classes
 * - Can extends classes
 * - Can implements interfaces
 * - Other purpose can be super easily and fast to create simple object to store data like DTO
 */


class User {}

interface UserInterface {}

$someClass = new Class(1, 'test') extends User implements UserInterface {};

foo($someClass);

function foo(UserInterface $user) {

}