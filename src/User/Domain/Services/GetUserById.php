<?php


namespace Src\User\Domain\Services;
use Src\User\Domain\Contract\UserRepositoryContract;


final class GetUserById
{
    public function __construct(private readonly UserRepositoryContract $userRepository)
    {
    }

    public function __invoke(int $id)
    {
        return $this->userRepository->getById($id);
    }
}