<?php


namespace Src\User\Infrastructure\Services;

use Src\User\Domain\Contract\UserRepositoryContract;


class GetUsersService
{
    public function __construct(private readonly UserRepositoryContract $userRepository)
    {}
    
    public function __invoke()
    {
        return $this->userRepository->getUsers();
    }
}
