<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEnviado;

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
        //fazendo validacao -- como sao pequenas nao sera necessario criar um FormRequest custom
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|string|email',
            'telefone' => 'required|regex:/[0-9]{11}/',
            'mensagem' => 'required|string',
            'arquivo' => 'required|file|mimes:pdf,doc,docx,odt,txt|max:500'
        ]);

        //ao inves de usar o Create e ja salvar no banco, vamos instanciar primeiro e depois salvar
        //instaciando o model e preenchendo tudo que eh passivel de preenchimento (do fillable)
        $contatoCriado = new Contato;
        $contatoCriado->fill($request->all());

        //armazenando o arquivo guardando o path -- por enquatno guardando uma string qualquer
        $contatoCriado->path_arquivo = $request->file('arquivo')->store('arquivos');

        //pegando o ip usando
        $contatoCriado->ip_acesso = $request->ip();

        //salvando no banco
        $contatoCriado->save();

        //mandando email
        Mail::to('email@teste.com')
            ->send(new ContatoEnviado($contatoCriado));

        //retornando a view do formulario com info que o contato foi enviado
        return view('paginas.contato')
            ->with([
                'contatoFoiEnviado' => true
            ]);
    }
}
