<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // *********Formularios*********
    public function mostrarForm(){
    	return view ('contactos');
    }

    public function processarForm(Request $request)
	{
		$nome=$request->nome;
		$morada=$request->morada;
		$automovel=$request->automovel;

		return view('form-enviado', [
			'nome'=>$nome,
			'morada'=>$morada,
			'automovel'=>$automovel
		]);
	}

	public function index(){
		return view ('entrada');
	}
}
