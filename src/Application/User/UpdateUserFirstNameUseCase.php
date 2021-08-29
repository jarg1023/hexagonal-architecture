<?php

namespace src\Application\User;

use src\Domain\User\User;
use src\Domain\User\UserFinderUseCase as DomainUserFinderUseCase;
use src\Domain\User\UserRepository;

final class UpdateUserFirstNameUseCase
{
    private $finder;
    private $repository;

    public function __construct(UserRepository $repository) {
        $this->finder     = new DomainUserFinderUseCase($repository);
        $this->repository = $repository;
    }

    public function __invoke(int $userId, string $firstName)
    {
        $user = $this->finder->__invoke($userId);

        $user->updateFirstName($firstName);

        $this->repository->save($user);
    }
}
