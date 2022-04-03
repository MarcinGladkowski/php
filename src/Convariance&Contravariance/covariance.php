<?php

/**
 * Covariance - based on return type from less specific to more specific
 */
abstract class Animal
{
    abstract public function speak();
}

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}

class Dog extends Animal
{
    public function speak()
    {
        // TODO: Implement speak() method.
    }
}

class Cat extends Animal
{
    public function speak()
    {
        // TODO: Implement speak() method.
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        return new Dog();
    }
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
        return new Cat();
    }
}