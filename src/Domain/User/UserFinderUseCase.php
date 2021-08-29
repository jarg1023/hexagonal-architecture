<?php

namespace src\Domain\User;

final class UserFinderUseCase
{
    private $repository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function __invoke(int $userId): User
    {
        $user = $this->repository->find($userId);

        $this->guard($user);

        return $user;
    }

    private function guard(?User $user): void
    {
        if (is_null($user)) {
            echo "User does not exist";
            die();
        }
    }
}
