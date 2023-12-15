<?php

namespace App\Http\Controllers\User;


use App\CommandBus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Commands\CreateUserCommand;


class CreateUser extends Controller
{
    public function __construct(
        private CommandBus $commandBus,
    )
    {}


    public function __invoke(Request $request)
    {

        try {

            $this->validate($request, [
                'name'  => 'required|string',
                'email' => 'required|email',
            ]);

            $command = new CreateUserCommand(
                name: $request->name,
                email: $request->email,
            );

            $this->commandBus->handle($command);

            
            return redirect()->route('home')->with('success', 'Usuario creado correctamente');
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('error', 'Error al crear el usuario');
        }
    }
}
