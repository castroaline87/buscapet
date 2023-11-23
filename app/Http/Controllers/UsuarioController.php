<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadastrar()
	{
		return view ('cadastro');
	}
	public function adocao()
	{
		return view ('adoteja');
	}
    public function login ()
	{
		return view ('login');
	}
}
