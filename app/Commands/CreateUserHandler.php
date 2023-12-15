<?php

namespace App\Commands;
use App\Models\User;


class CreateUserHandler
{

    public function __invoke(CreateUserCommand $command)
    {
        $user = new User();
        $user->name = $command->getName();
        $user->email = $command->getEmail();
        $user->save();
    }
}
