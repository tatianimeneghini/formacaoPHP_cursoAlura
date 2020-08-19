<?php

//Existem duas formas de incluir um arquivo externo no PHP.
//include (functions.php); ou include 'functions.php';
//Se o nome do arquivo estiver errado, aparecerá um aviso WARNING, que continuará sua execução.
include 'functions.php';

//Caso seja um arquivo necessário ao arquivo, inserimos o required (requisitado).
//Se o nome do arquivo estiver errado, aparecerá um FATAL ERROR, parando sua execução.
//require 'functions.php';

//Pra incluir um arquivo apenas se ele não tiver sido incluído anteriormente.
//O código será executado corretamente, sem qualquer nível de erro.
//require_once 'functions.php';

//Existem três principais níveis de erro:
//  - E_WARNING: aviso de que o PHP não conseguiu realizar alguma instrução, mas continuará a execução do programa.
//  - E_NOTICE: o PHP encontra algum problema, mas consegue contornar.
//  - E_ERROR: o PHP informa que ocorreu um problema e não conseguirá continuar com a execução.

$contasCorrentes = [
    '123.456.789-0'  => [
        'titular' => 'Vinicius Amaral',
        'saldo' => 4500
    ], 
    '789.0123.456-7' => [
        'titular' => 'Maria Gurgel',
        'saldo' => 9000
    ], 
    '456.789.012-3'  => [
        'titular' => 'Alberto Ferreira',
        'saldo' => 1200
    ]
];

// $contasCorrentes['123.456.789-0'] = sacar($contasCorrentes['123.456.789-0'], 250);
// $contasCorrentes['789.0123.456-7'] = depositar($contasCorrentes['789.0123.456-7'], 1700);
// $contasCorrentes['456.789.012-3'] = sacar($contasCorrentes['456.789.012-3'], 150);

//A função <unset> do PHP excluí uma variável.
//É possível também utilizar informando o índice do array.
//  Ex: unset($nomeDoArray[i]);
// unset($contasCorrentes['456.789.012-3']);

//Para transformar em letras maiúsculas.
// titularComLetrasMaiusculas($contasCorrentes['789.0123.456-7']);

//Para declarar ao PHP que haverá uma lista em HTML.
echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta) {
    //Define um array, como a função list, de maneira reduzida
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}

echo "</ul>";