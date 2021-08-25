<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\InstructoresController;
use Illuminate\Support\Facades\Session;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/instructores', function () {
    return view('instructores');
});

Route::get('/logout', function () {
    Session::forget('usuario');
    return redirect('login');
});


Route::post("/login", [UsuariosController::class, 'login']);
Route::get("/cursos", [CategoriaController::class, 'index']);

Route::post("agregar_Categoria", [CategoriaController::class, 'agregarCategoria']);
Route::post("eliminar_Categoria/{id}", [CategoriaController::class, 'eliminarCategoria']);
Route::post("editar_Categoria/{categoria}", [CategoriaController::class, 'editarCategoria']);

Route::get("/instructores", [InstructoresController::class, 'index']);
Route::get("/agregarInstructor", [InstructoresController::class, 'agregarIndex']);
Route::post("agregar_Instructor", [InstructoresController::class, 'agregarInstructor']);