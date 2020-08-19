<?php

//Para executar uma código isolado, implementamos uma subrotina.
function exibeMensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}

//Funcionalidade de sacar que retorna um valor.
//É possível que a função não receba nenhum parâmetro, como o ($mensagem).
function sacar ($conta, $valorSaque) {
    //Uma função só reconhece as variáveis que foram definidas dentro dela.
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor!");
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}

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

$contasCorrentes['123.456.789-0'] = sacar($contasCorrentes['123.456.789-0'], 250);
$contasCorrentes['789.0123.456-7'] = sacar($contasCorrentes['789.0123.456-7'], 100);
$contasCorrentes['456.789.012-3'] = sacar($contasCorrentes['456.789.012-3'], 1500);

// if (12 > $contasCorrentes['456.789.012-3']['saldo']) {
//     exibeMensagem($mensagem = "Você não pode sacar este valor!");
// } else {
//     $contasCorrentes['456.789.012-3']['saldo'] -= 500;
// }

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($mensagem = $cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}