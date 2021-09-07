<?php

namespace App\Domain\User\Services;

use App\Domain\User\User;
use App\Domain\User\UserRepository;
use App\Domain\User\ValueObjects\UserId;

final class UserFinderService
{
    private $repository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function find(UserId $userId): User
    {
        $user = $this->repository->find($userId);

        $this->validateUserExists($user);

        return $user;
    }

    private function validateUserExists(?User $user): void
    {
        if (is_null($user)) {
            echo "User does not exist";
            die();
        }
    }
}
