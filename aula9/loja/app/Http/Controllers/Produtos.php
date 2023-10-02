<?php

namespace App\Http\Controllers;

class Produtos extends Controller
{
    // Todo método de controller deve retornar
    // uma view
    public function exibirProdutos()
    {
        // capturar do banco de dados

        return view('minhapagina');
    }
}
