<?php

namespace App\Http\Controllers;

use App\Models\AnunciosAdocao;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    public function home()
	{	
		$anuncios = AnunciosAdocao::all();

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

		if($especie = $request->input('especie')) {
			$anuncios->where('especie', '=', $especie);
		}

		if($sexo = $request->input('sexo')) {
			$anuncios->where('sexo', '=', $sexo);
		}

		if($raca = $request->input('raca')) {
			$anuncios->where('raca', 'LIKE', $raca);
		}

		if($tamanho = $request->input('tamanho')) {
			$anuncios->where('tamanho', '=', $tamanho);
		}

		return view ('listagem-adocao', [
			'anuncios' => $anuncios->get(),
			'especies' => AnunciosAdocao::especiesCadastradas(),
			'sexos' => AnunciosAdocao::sexosCadastrados(),
			'racas' => AnunciosAdocao::racasCadastradas(),
			'tamanhos' => AnunciosAdocao::tamanhosCadastrados(),
		]);
	}

    public function detalhesAdocao(Request $request)
	{
		$idAnuncio = $request->input('id');
		$anuncio = AnunciosAdocao::find($idAnuncio);

		$outrosAnuncios = AnunciosAdocao::where('id', '<>', $idAnuncio)->get();

		return view ('adocao', [
			'anuncio' => $anuncio,
			'outrosAnuncios' => $outrosAnuncios,
		]);
	}

    public function instrucoes()
	{
		return view ('instrucoes');
	}

	public function pertoDeMim()
	{
		return view('perto-de-mim');
	}
}
