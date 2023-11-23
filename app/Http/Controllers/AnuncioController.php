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
		$anuncios = AnunciosAdocao::query();

		$especie = $request->input('especie');
		if($especie) {
			$anuncios->where('especie', '=', $especie);
		}
		$sexo = $request->input('sexo');
		if($sexo) {
			$anuncios->where('sexo', '=', $sexo);
		}
		$raca = $request->input('raca');
		if($raca) {
			$anuncios->where('raca', 'LIKE', $raca);
		}
		$tamanho = $request->input('tamanho');
		if($tamanho) {
			$anuncios->where('tamanho', '=', $tamanho);
		}
		return view ('listagem-adocao', [
			'anuncios' => $anuncios->get()
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
