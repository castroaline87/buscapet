<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\AnunciosAdocao;
use Illuminate\Http\Request;

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
    public function listagemAdocao(Request $request)
	{
		$especie = $request->input('especie');

		$anuncios = AnunciosAdocao::all(); // pega todos os anuncios do banco

		return view ('listagem-adocao', [
			'anuncios' => $anuncios
		]);
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
