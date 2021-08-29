<?php

namespace src\Application\User;

use src\Domain\User\User;
use src\Domain\User\UserRepository;
use src\Domain\User\UserFinderUseCase as DomainUserFinderUseCase;


final class UserFinderUseCase
{
    private $finder;

    public function __construct(UserRepository $repository) {
        $this->finder = new DomainUserFinderUseCase($repository);
    }

    public function __invoke(int $userId): ?User
    {
        return $this->finder->__invoke($userId);
    }
}
