<?php

namespace src\Domain\User;

interface UserRepository
{
    public function find(int $userId): ?User;
    public function save(User $user): void;
}