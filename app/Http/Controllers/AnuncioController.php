<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    public function home()
	{

		
		return view('home');
	} 
    public function listagemAdocao()
	{
		return view ('listagem-adocao');
	}
    public function detalhesAdocao()
	{
		return view ('detalhes-adocao');
	}
    public function instrucoes()
	{
		return view ('instrucoes');
	}
}
