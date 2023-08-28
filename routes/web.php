<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AnuncioController::class, 'home']);


Route::get('/animais-adocao', [AnuncioController::class, 'animais']);

Route::get('/cadastro', [UsuarioController::class, 'cadastrar']);



Route::get('/detalhes-adocao', [AnuncioController::class, 'detalhesAdocao']);


Route::get('/instrucoes', [AnuncioController::class, 'instrucoes']);

Route::get('/login', [UsuarioController::class, 'login']);

Route::get('/denuncias', function () {
    return view('denuncias');
});

Route::get('/dogsitter', function () {
    return view('dogsitter');
});

Route::get('/doarumpet', function () {
    return view('doarumpet');
});