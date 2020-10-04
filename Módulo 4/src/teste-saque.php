<?php

use Alura\Banco\Model\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Model\{Endereco, CPF};

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('567.890.123-4'), 
        'Ana Santos', 
        new Endereco('Manaus', 'bairro Teste', 'Rua Água Viva', '37'),
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();