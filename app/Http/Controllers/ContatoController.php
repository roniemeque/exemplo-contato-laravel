<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use Illuminate\Support\Facades\Storage;

class ContatoController extends Controller
{

    /**
     * index
     * retorna a view do formulario
     */
    public function index()
    {
        return view('paginas.contato');
    }

    public function salvar(Request $request)
    {
        //ao inves de usar o Create e ja salvar no banco, vamos instanciar primeiro e depois salvar

        //instaciando o model e preenchendo tudo que eh passivel de preenchimento (do fillable)
        $contatoCriado = new Contato;
        $contatoCriado->fill($request->all());

        //armazenando o arquivo guardando o path -- por enquatno guardando uma string qualquer
        $contatoCriado->path_arquivo = $request->file('arquivo')->store('arquivos');

        //salvando no banco
        $contatoCriado->save();

        dd($contatoCriado);
    }
}
