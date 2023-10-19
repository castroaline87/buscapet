<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\AnunciosAdocao;

class AnuncioController extends Controller
{
    public function home()
	{	
		$anuncios = AnunciosAdocao::all(); // pega todos os anuncios do banco
		return view('home', [
			'anuncios' => $anuncios
		]);
	}
    public function animais()
	{

		
		return view('home');
	} 
    public function listagemAdocao()
	{
		return view ('listagem-adocao');
	}
    public function detalhesAdocao()
	{
		return view ('adocao');
	}
    public function instrucoes()
	{
		$usuarios = Usuario::all(); // pega todos os usuarios do banco

		return view ('instrucoes', [
			'usuarios' => $usuarios,
		]);
	}
}
