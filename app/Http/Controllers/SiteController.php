<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContatoModel;

class SiteController extends Controller
{
    public function index (){
        return view('home');
    }

    public function contato (){
        $contatos = ContatoModel::all();


        return view('contato');
    }

    public function salvar (Request $request) {

        $dados_validados = $request->validate ([
            //'nome' =>['required', new Uppercase],
            'nome' =>['required'],
            'email' => 'email',
            'mensagem' => 'required|min:5',
        ]);
        ContatoModel::create($dados_validados);

        return redirect()->route('site.contato')->with('sucesso', 'MENSAGEM RECEBIDA! Em breve retornaremos.');
    }
}
