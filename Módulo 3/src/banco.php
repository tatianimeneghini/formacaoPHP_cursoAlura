<?php

// Arquivo para realizar as operações.
require_once 'Conta.php';

 //Armazenar novos valores dentro da classe em um novo objeto (endereço para encontrar).
 $primeiraConta = new ContaCorrente('123.456.789-0', 'Vinicius Dias');
 // $segundaConta = new ContaCorrente();

 // //O símbolo -> a=significa para acessar um atributo de um objeto.
 // $primeiraConta->saldo = 500;
 // $primeiraConta->nome = 'Vinicius Dias';
 // $primeiraConta->cpf = '123.456.789-0'; //A variável armazena o valor.
 // var_dump($primeiraConta); //A variável armazena a referência de endereço.
 
 // $primeiraConta->depositar(250);
 // var_dump($primeiraConta);
 
 // $primeiraConta->transferir(150, $segundaConta);
 // echo $primeiraConta->saldo;
 
 $primeiraConta->depositar(600);
 $primeiraConta->sacar(300); //Ok
 // $primeiraConta->saldo -= 300; // Não ok

 echo $primeiraConta->recuperarSaldo() . PHP_EOL; //Propriedade privada, não acessamos.
 echo $primeiraConta->recuperarCPF() . PHP_EOL;
 echo $primeiraConta->recuperarNome() . PHP_EOL;

 