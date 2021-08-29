<?php

namespace src\Infrastructure\User;

use src\Domain\User\User;
use src\Domain\User\UserRepository;

final class MySqlUserRepository implements UserRepository
{
    public function find(int $userId): ?User
    {
        // Return User;
        return null;
    }

    public function save(User $user): void
    {
        // save user
    }
}
