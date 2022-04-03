<?php

abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function speak();

    public function eat(AnimalFood $food)
    {
        // some implementation
    }

}

class Dog extends Animal
{
    public function speak()
    {
        // TODO: Implement speak() method.
    }
    /** Less specific from  AnimalFood to Food */
    public function eat(Food $food)
    {
        // some implementation
    }
}

class Food
{

}

class AnimalFood extends Food
{

}