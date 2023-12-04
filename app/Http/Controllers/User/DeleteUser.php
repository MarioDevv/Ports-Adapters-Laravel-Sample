<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Src\User\Application\DeleteUserUseCase;



class DeleteUser extends Controller
{
    public function __construct(private readonly DeleteUserUseCase $deleteUserUseCase)
    {
    }

    public function __invoke(Request $request)
    {   
        try {
            $id = $request->id;
            $this->deleteUserUseCase->__invoke($id);
            
            return redirect()->route('home')->with('success', 'Usuario elimando correctamente');    
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'No se ha podido eliminar el usuario');
        }
    }
}