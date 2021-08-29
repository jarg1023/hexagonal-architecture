<?php

namespace src\Domain\User;

final class User
{
    private $age;
    private $firstName;
    private $id;

    public function __construct(int $age, string $firstName, int $id) {
        $this->age       = $age;
        $this->firstName = $firstName;
        $this->id        = $id;
    }
    
    public function getAge(): int
    {
        return $this->age;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getId(): int
    {
        return $this->id;
    }

    // ? Per què això va aquí? Perquè té a veure amb actualitzar una propietat de l'entitat?
    public function updateFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }
}
