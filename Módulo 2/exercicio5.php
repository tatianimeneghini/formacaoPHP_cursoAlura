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

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}