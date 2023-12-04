<?php

namespace Src\User\Application;

use Src\User\Domain\Contract\UserRepositoryContract;


final class ShowUserUseCase
{
    public function __construct(private readonly UserRepositoryContract $userRepository)
    {}

    public function __invoke(int $id)
    {
        return $this->userRepository->getById(id: $id);
    }
}