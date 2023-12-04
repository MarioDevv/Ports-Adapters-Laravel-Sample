<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Src\User\Application\CreateUserUseCase;


class CreateUser extends Controller
{
    public function __construct(private readonly CreateUserUseCase $createUserUseCase)
    {}
    

    public function __invoke(Request $request)
    {

        try {
            $this->validate($request, [
                'name'  => 'required|string',
                'email' => 'required|email',
            ]);
    
        
            $this->createUserUseCase->__invoke(
                name: $request->input('name'),
                email: $request->input('email'),
            );

            return redirect()->route('home')->with('success', 'Usuario creado correctamente');
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('error', 'Error al crear el usuario');
        }
    }
}
