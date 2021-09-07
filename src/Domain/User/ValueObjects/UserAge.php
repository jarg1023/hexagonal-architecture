<?php

namespace App\Domain\User\ValueObjects;

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
            echo "Age must be equal or greater than 0";
            die();
        }
    }
}
