<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Src\User\Application\UpdateUserUseCase;



class UpdateUser extends Controller
{
    public function __construct(private readonly UpdateUserUseCase $updateUser)
    {}

    public function __invoke(Request $request)
    {
        try{
            $id = $request->id;
            $name = $request->input('name');
            $email = $request->input('email');

            $this->updateUser->__invoke(
                id: $id,
                name: $name,
                email: $email,
            );
            
            return redirect()->route('home')->with('success', 'Usuario actualizado correctamente');            
        } catch(\Exception $e) {
            return redirect()->route('home')->with('error', 'No se ha podido actualizar el usuario');            

        }
    }
}