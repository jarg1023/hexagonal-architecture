<?php

namespace App\Infrastructure\User;

use App\Domain\User\User;
use App\Domain\User\UserRepository;
use App\Domain\User\ValueObjects\UserId;

final class MySqlUserRepository implements UserRepository
{
    public function find(UserId $userId): ?User
    {
        // Return User;
        return null;
    }

    public function save(User $user): void
    {
        // save user
    }
}
