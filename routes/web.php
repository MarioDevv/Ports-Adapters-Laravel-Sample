<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\GetUsers;
use App\Http\Controllers\User\DeleteUser;
use App\Http\Controllers\User\UpdateUser;
use App\Http\Controllers\User\ShowUser;
use App\Http\Controllers\User\CreateUser;



/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', GetUsers::class)->name('home');
Route::get('/user/{id}', ShowUser::class)->name('user.show');
Route::post('/user', CreateUser::class)->name('user.create');
Route::delete('/user/{id}', DeleteUser::class)->name('user.delete');
Route::put('/user/{id}', UpdateUser::class)->name('user.update');


