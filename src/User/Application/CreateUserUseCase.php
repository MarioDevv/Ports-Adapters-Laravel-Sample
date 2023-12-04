<?php

namespace Src\User\Application;


use Src\User\Domain\Contract\UserRepositoryContract;
use Src\User\Domain\User;


final class CreateUserUseCase
{
    public function __construct(private readonly UserRepositoryContract $userRepository)
    {}
    

    public function __invoke(
        string $name,
        string $email,
    )
    {

        $user = User::create(
            name: $name,
            email: $email,
        );

        $this->userRepository->createUser(
            user: $user,
        );
    }
}