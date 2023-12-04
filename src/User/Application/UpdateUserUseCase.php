<?php

namespace Src\User\Application;

use Src\User\Domain\Services\GetUserById;
use Src\User\Domain\Contract\UserRepositoryContract;


final class UpdateUserUseCase
{
    public function __construct(
        private readonly UserRepositoryContract $userRepository,
        private GetUserById $getUserById
    ) {
    }

    public function __invoke(
        int $id,
        string $name,
        string $email,
    ) {
        
        $user = $this->getUserById->__invoke($id);

        $user->setName($name);
        $user->setEmail($email);

        $this->userRepository->update(
            user: $user,
            id: $id
        );


    }
}