<?php

$contasCorrentes = [
    123456  => [
        'titular' => 'Vinicius Amaral',
        'saldo' => 4500
    ], 
    7890123 => [
        'titular' => 'Maria Gurgel',
        'saldo' => 9000
    ], 
    456789  => [
        'titular' => 'Alberto Ferreira',
        'saldo' => 1200
    ]
];

//Adicionar um item em um array associativo.
$contasCorrentes[7890123] = [
    'titular' => 'Maria Gurgel',
    'saldo' => 12000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['saldo'] . PHP_EOL;
}