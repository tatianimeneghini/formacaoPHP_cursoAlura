<?php

$conta1 = [
    'titular' => 'Vinicius Amaral',
    'saldo' => 4500
];

$conta2 = [
    'titular' => 'Maria Gurgel',
    'saldo' => 9000
];

$conta3 = [
    'titular' => 'Alberto Ferreira',
    'saldo' => 1200
];

$contasCorrentes = [
    123456  => $conta1, 
    7890123 => $conta2, 
    456789  => $conta3
]; //

//Foreach é uma forma mais legível para executar a leitura de 
// cada array, sem precisar acessar índices e saber o tamanho do array
// além de não precisar conhecer as chaves de cada índice.
foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}