
<?php

namespace App\Domain\User\ValueObjects;

use InvalidArgumentException;

class UserFirstName
{
    private $firstName;

    public function __construct(string $firstName) {
        $this->validFirstName($firstName);
        $this->firstName = $firstName;
    }

    private function validFirstName(string $firstName): void
    {
        if (empty($firstName)) {
            throw new InvalidArgumentException("First name must have a value");
        }
    }
}
