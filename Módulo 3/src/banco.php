<?php

// Arquivo para realizar as operações.
require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

 //Armazenar novos valores dentro da classe em um novo objeto (endereço para encontrar).
 $primeiraConta = new ContaCorrente(new Titular(new CPF('123.456.789-0'), 'Vinicius Dias'));
 $segundaConta = new ContaCorrente(new Titular(new CPF('789.012.345-6'), 'Rafaela Silva'));

 // //O símbolo -> a=significa para acessar um atributo de um objeto.
 // $primeiraConta->saldo = 500;
 // $primeiraConta->nome = 'Vinicius Dias';
 // $primeiraConta->cpf = '123.456.789-0'; //A variável armazena o valor.
 // var_dump($primeiraConta); //A variável armazena a referência de endereço.
 
//  $primeiraConta->transferir(150, $segundaConta);
//  echo $primeiraConta->saldo;

//  echo $primeiraConta->recuperarSaldo() . PHP_EOL; //Propriedade privada, não acessamos.
//  echo $primeiraConta->recuperarCPF() . PHP_EOL;

 echo self::$numeroContas;