<?php


namespace Src\User\Application;
use Src\User\Domain\Contract\UserRepositoryContract;

class DeleteUserUseCase
{
    public function __construct(private readonly UserRepositoryContract $userRepository)
    {}

    public function __invoke(int $id)
    {
        $this->userRepository->delete($id);
    }
}