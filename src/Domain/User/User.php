<?php

namespace src\Domain\User;

final class User
{
    private $id;
    private $firstName;
    private $age;

    public function __construct(int $id, string $firstName, int $age) {
        $this->id        = $id;
        $this->firstName = $firstName;
        $this->age       = $age;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
