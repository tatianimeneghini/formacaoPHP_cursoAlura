<?php

//Array associativo é um mapa/dicionário que associa diversos valores para as chaves. 
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

//É possível acessar somente o valor de um atributo.
echo $conta1['titular'];

$contasCorrentes = [
    $conta1, 
    $conta2, 
    $conta3
];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}