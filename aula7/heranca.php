<?php

abstract class ContaCorrente
{
    protected float $saldo;
    public string $nome;

    public function __construct(float $saldo)
    {
        $this->saldo = $saldo;
    }

    public function adicionarSaldo(float $saldo)
    {
        $this->saldo += $saldo;
    }

    public function retirarSaldo(float $saldo)
    {
        $this->saldo -= $saldo;
    }
}

class ContaCorrentePF extends ContaCorrente
{
    public string $cpf;
}

class ContaCorrentePJ extends ContaCorrente
{
    public string $cnpj;
    protected float $lis = 10_000;

    // polimorfismo / sobrescrita (E NÃO SOBRECARGA)
    public function retirarSaldo(float $saldo)
    {
        if ($this->saldo === 0) {
            $this->lis -= $saldo;
        } else {
            // muito cuidado: NUNCA FAÇA com $this $this->retirarSaldo()
            parent::retirarSaldo($saldo);

            // recursividade
            // $this->retirarSaldo()
        }
    }
}

// class Cliente extends Model
// {

// }

$contaPF = new ContaCorrentePF(2000);
$contaPF->cpf = '333.333.333-33';
$contaPF->adicionarSaldo(200);

$contaPJ = new ContaCorrentePJ(2000);
$contaPJ->cnpj = '23.333.333/0001-23';
$contaPJ->adicionarSaldo(200);