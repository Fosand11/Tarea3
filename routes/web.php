<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Crea un usuario

Route::get('/create', function () {
    $user = User::create([
        'name' => 'junior',
        'email' => 'junior@gmail.com',
        'password' => 'password',
        'is_admin' => false
    ]);
    return $user;
});

//Lista a todos los usuarios

Route::get('/list', function () {
    $users = User::all();
    return $users;
});

//Muestra un usuario por ID

Route::get('/show/user/{id}', function ($id) {
    $user = User::find($id);
    return $user;
});

//Actualizar un usuario por ID

Route::get('/update/user/{id}', function ($id) {
    $user = User::find($id)->firstOrFail();
    $user->update([
        'name' => 'Juan'
    ]);
    return $user;
});

//Eliminar usuario por ID

Route::get('/delete/user/{id}', function ($id) {
    $user = User::find($id);
    $user->delete();
    return $user;
});
