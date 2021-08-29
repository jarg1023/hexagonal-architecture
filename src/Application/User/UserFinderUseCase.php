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

    public function find(int $userId): User
    {
        return $this->repository->find($userId);
    }
}
