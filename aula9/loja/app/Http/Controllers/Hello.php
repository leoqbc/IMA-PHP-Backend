<?php

namespace App\Http\Controllers;

class Hello extends Controller
{
    public function exibeNome(string $nome, string $sobrenome)
    {
        // Passando para a view
        // o valor de nome
        // resource/views/hello.blade.php
        return view('hello', [ 
            'nomePessoa' => $nome,
            'sobrenomePessoa' => $sobrenome
        ]);
    }
}
