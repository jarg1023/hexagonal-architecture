<?php

namespace App\Application\User;

use App\Domain\User\User;
use App\Domain\User\UserRepository;
use App\Domain\User\Services\UserFinderService as DomainUserFinderService;
use App\Domain\User\ValueObjects\UserId;

final class UserFinderService
{
    private $finder;

    public function __construct(UserRepository $repository) {
        $this->finder = new DomainUserFinderService($repository);
    }

    public function find(UserId $userId): ?User
    {
        return $this->finder->find($userId);
    }
}
