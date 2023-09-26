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
    // propriedade características
    public float $valor;
    public string $nomeJogo;
    public array $numeros;

    // são as ações
    public function imprimir(): void
    {
        if (isset($this->valor) === false) {
            // esta validando se valor foi preenchido
            throw new Exception('Valor deve ser preenchido');
        }
        // $this refere-se a propria classe
        echo "Valor da aposta: $this->valor <br>";
        echo "Nome do Jogo: $this->nomeJogo <br>";

        echo "Numeros: <br>";
        foreach ($this->numeros as $numero) {
            echo "<div>$numero</div>";
        }
    }
}


// instanciação | criar a classe em modo físico 
$aposta = new Aposta();
$aposta->valor = 203.00;
$aposta->nomeJogo = 'Mega Sena';
$aposta->numeros = [10, 3, 67, 23, 98, 23];
$aposta->imprimir();

$aposta2 = new Aposta();
$aposta2->valor = 15.00;
$aposta2->nomeJogo = 'Duplinha';
$aposta2->numeros = [2, 3];
$aposta2->imprimir();
