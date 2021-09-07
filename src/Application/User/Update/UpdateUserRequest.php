<?php

namespace App\Application\User\Update;

use App\Domain\User\ValueObjects\UserAge;
use App\Domain\User\ValueObjects\UserFirstName;
use App\Domain\User\ValueObjects\UserId;

final class UpdateUserRequest
{
    private $age;
    private $firstName;
    private $id;

    public function __construct(UserAge $age, UserFirstName $firstName, UserId $id) {
        $this->age       = $age;
        $this->firstName = $firstName;
        $this->id        = $id;
    }

    public function getAge(): UserAge
    {
        return $this->age;
    }

    public function getFirstName(): UserFirstName
    {
        return $this->firstName;
    }

    public function getId(): UserId
    {
        return $this->id;
    }
}
