<?php

namespace App\Domain\User\ValueObjects;

use InvalidArgumentException;

class UserAge
{
    private $age;

    public function __construct(int $age) {
        $this->validAge($age);
        $this->age = $age;
    }

    private function validAge(int $age): void
    {
        if ($age < 0) {
            throw new InvalidArgumentException("Age must be equal or greater than 0");
        }
    }
}
