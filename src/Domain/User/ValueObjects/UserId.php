<?php

namespace App\Domain\User\ValueObjects;

class UserId
{
    private $id;

    public function __construct(int $id) {
        $this->validId($id);
        $this->id = $id;
    }

    private function validId(int $id): void
    {
        if ($id < 0) {
            echo "Age must be equal or greater than 0";
            die();
        }
    }
}
