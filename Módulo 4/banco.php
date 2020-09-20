<?php

require_once 'autoload.php';

use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Titular;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario;

$endereco = new Endereco('Petrópolis', 'Bairro das Pedras', 'Rua das Ametistas', '12');
$vinicius = new Titular(new CPF('123.456.789-00'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNome() . PHP_EOL;
echo $primeiraConta->recuperarCPF() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('789.012.345-66'), 'Rafaela Silva', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

echo Conta::recuperarNumeroContas();

$umFuncionario = new Funcionario('Vinicius', new CPF('123.456.789-10'), 'Desenvolvedor');
var_dump($umFuncionario);