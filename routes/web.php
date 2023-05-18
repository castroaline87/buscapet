<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/animais-adocao', function () {
    return view('adocao');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/detalhes-adocao', function () {
    return view('detalhes-adocao');
});


Route::get('/instrucoes', function () {
    return view('instrucoes');
});

Route::get('/login', function () {
    return view('login');
});


