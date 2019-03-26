<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
