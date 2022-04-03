<?php

require './vendor/autoload.php';

// User and UserBuilder
class User
{
    private string $name;
    private string $email;
    private bool $isActive;

    // ... and more others

    public function __construct(string $name, string $email, bool $isActive)
    {
        $this->name = $name;
        $this->email = $email;
        $this->isActive = $isActive;
    }

    public function Name(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function Email(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}

class UserBuilder
{
    private string $name;
    private string $email;
    private bool $isActive;

    public function __construct()
    {
        $this->name = 'CustomName';
        $this->email  = 'CustomEmail';
        $this->isActive = true;
    }

    public function withAnName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function withAnEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function withAnIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public static function anUser(): self
    {
        return new self();
    }

    public function create(): User
    {
        return new User($this->name ,$this->email, $this->isActive);
    }
}

UserBuilder::anUser()
    ->withAnEmail('NewCustomEmail')
    ->withAnName('NewCustomName')
    ->withAnIsActive(false)
    ->create();

// super simple builder
class SimpleUserFactory
{
    private User $user;

    private function __construct()
    {
        $this->user = new User(
          'CustomName',
            'CustomEmail',
            true
        );
        // and other properties
    }

    public static function create(): User
    {
        return (new self())->user();
    }

    private function user(): User
    {
        return $this->user;
    }
}

SimpleUserFactory::create()
    ->setName('Marcin')
    ->setEmail('custom.marcin@email.test')
    ->setIsActive(false);


use Faker\Factory;

class SimpleFakerUserFactory
{
    private User $user;

    private function __construct()
    {
        $faker = Factory::create();

        $this->user = new User(
            $faker->name,
            $faker->email,
            true
        );
    }

    public static function create(): User
    {
        return (new self())->user();
    }

    private function user(): User
    {
        return $this->user;
    }
}

SimpleFakerUserFactory::create()
    ->setName('Marcin')
    ->setEmail('custom.marcin@email.test')
    ->setIsActive(false);