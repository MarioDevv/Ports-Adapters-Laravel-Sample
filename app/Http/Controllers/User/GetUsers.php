<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;

use Src\User\Infrastructure\Services\GetUsersService;



class GetUsers extends Controller
{
    public function __construct(private readonly GetUsersService $getUsersService)
    {}

    public function __invoke()
    {
        $users =  $this->getUsersService->__invoke();
        return view('welcome', compact('users'));
    }
}