<?php

namespace src\Application\User;

use src\Domain\User\User;
use src\Domain\User\UserRepository;


final class UserFinderUseCase
{
    private $repository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function find(int $userId): ?User
    {
        $user = $this->repository->find($userId);

        $this->guard($user);

        return $user;
    }

    private function guard(?User $user): void
    {
        if (is_null($user)) {
            echo 'user does not exist';
            die();
        }
    }
}
