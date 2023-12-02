<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\UsuarioController;

Route::get('/', [AnuncioController::class, 'home']);

Route::get('/listagem-adocao', [AnuncioController::class, 'listagemAdocao']);

Route::get('/cadastro', [UsuarioController::class, 'cadastrar']);

Route::get('/detalhes-adocao', [AnuncioController::class, 'detalhesAdocao']);

Route::get('/instrucoes', [AnuncioController::class, 'instrucoes']);

Route::get('/login', [UsuarioController::class, 'login']);

Route::get('/adoteja', [UsuarioController::class, 'adocao']);

Route::get('/perto-de-mim', [AnuncioController::class, 'pertoDeMim']);

Route::get('/denuncias', function () {
    return view('denuncias');
});

Route::get('/dogsitter', function () {
    return view('dogsitter');
});

Route::get('/doarumpet', function () {
    return view('doarumpet');
});