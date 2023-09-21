<?php

// PSRs / Convenções
class UmaClasse extends stdClass
{
    // propriedades = variáveis
    public string $atributo1;

    protected int $idade;

    // Ações / Métodos
    public function umAcao(string $nome): array
    {
        // um ação aqui
        return [];
    }
}

// Aposta
// Cliente > Jogo > Aposta > Pagamento

// Liguagem Ebigua > A linguagem do cliente

class Aposta
{
    public float $valor;
    public string $nomeJogo;
    public array $numeros;
}

// instanciação | criar a classe em modo físico 
$aposta = new Aposta();
$aposta->valor = 203.00;
$aposta->nomeJogo = 'Mega Sena';
$aposta->numeros = [2, 3, 67, 23, 98, 23];

$aposta2 = new Aposta();
$aposta2->valor = 15.00;
$aposta2->nomeJogo = 'Duplinha';
$aposta2->numeros = [2, 3];

var_dump($aposta, $aposta2);