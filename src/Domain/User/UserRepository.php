<?php

namespace App\Domain\User;

use App\Domain\User\ValueObjects\UserId;

interface UserRepository
{
    public function find(UserId $userId): ?User;
    public function save(User $user): void;
}