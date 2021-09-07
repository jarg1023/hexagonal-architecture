<?php

namespace App\Application\User\Update;

use App\Domain\User\Services\UserFinderService as DomainUserFinderService;
use App\Domain\User\UserRepository;

final class UpdateUserUseCase
{
    private $finder;
    private $repository;

    public function __construct(UserRepository $repository) {
        $this->finder     = new DomainUserFinderService($repository);
        $this->repository = $repository;
    }

    // ? Com controlo nullables?
    public function execute(UpdateUserRequest $request)
    {
        $user = $this->finder->find($request->getId());

        $user->setFirstName($request->getFirstName());
        $user->setAge($request->getAge());

        $this->repository->save($user);

        return UpdateUserResponse::RESPONSE_STATUS['OK'];
    }
}
