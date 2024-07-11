<?php

use App\Http\Controllers\Api\UsuariosConstroller;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [UsuariosConstroller::class,'index']);
Route::post('/usuario/{id}', [UsuariosConstroller::class,'update'])->name('usuario.update');
