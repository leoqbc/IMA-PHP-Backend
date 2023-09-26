<?php
// Exemplo sobre encapsulamento
// Conta-Corrente
class ContaCorrente
{
    // encapsular é não dar acesso direto a certas propriedades
    protected float $saldo;

    public function __construct(float $saldo)
    {
        $this->saldo = $saldo;
    }

    public function retirarSaldo(float $valor)
    {
        $this->saldo -= $valor;
    }

    public function adicionarSaldo(float $valor)
    {
        $this->saldo += $valor;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }
}

// construtor é a forma de inicializar valores diretamente na criação
// mais conhecida como instancia de uma classe ()
$nubia = $db->query('SELECT * FROM conta_corrente WHERE id = 12');

$contaCorrente = new ContaCorrente(5000, 12);
$contaCorrente->retirarSaldo(4980);
$contaCorrente->adicionarSaldo(2000);

// validações
// 3333333333
// $pessoa->definirCPF($cpf);
// $pessoa->pegarCPF(); // 333.333.333-33


// gravar no banco
// $db->query('UPDATE conta_corrente SET saldo = ' . $contaCorrente->consultarSaldo());

echo 'A Nubia está agora com: ' . $contaCorrente->consultarSaldo();