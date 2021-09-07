<?php

namespace App\Domain\User;

use App\Domain\User\ValueObjects\UserAge;
use App\Domain\User\ValueObjects\UserFirstName;
use App\Domain\User\ValueObjects\UserId;

final class User
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

    public function setFirstName(UserFirstName $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setAge(UserAge $age): void
    {
        $this->age = $age;
    }
}
