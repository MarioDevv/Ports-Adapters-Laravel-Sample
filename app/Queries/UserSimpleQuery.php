<?php

namespace App\Queries;

use App\Models\User;


class UserSimpleQuery
{

    public function __construct(
        private int $userId,
    ) {}


    public function getUser(): Array
    {
        $user = User::find($this->userId);

        return [
            'name' => $user->name,
            'email' => $user->email,
        ];
    }

}







