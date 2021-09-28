<?php

namespace App\Domain\User\ValueObjects;

use InvalidArgumentException;

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
            throw new InvalidArgumentException("Age must be equal or greater than 0");
        }
    }
}
