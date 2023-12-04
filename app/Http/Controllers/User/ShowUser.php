<?php


namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Src\User\Application\ShowUserUseCase;


class ShowUser extends Controller
{
    public function __construct(private readonly ShowUserUseCase $showUser)
    {}

    public function __invoke(Request $request)
    {
        try{
            $id = $request->id;
            $user = $this->showUser->__invoke(id: $id);

            return view('show', ['user' => $user->toArray()]);
        } catch(\Exception $e) {
            return redirect()->route('home')->with('error', 'No se ha podido mostrar el usuario');            

        }
    }
}