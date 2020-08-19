<?php

function exibeMensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}

//A versão mais recente do PHP é possível declarar o tipo da variável.
//Isso aumenta a segurança do código e facilita a procura por erros.
function depositar (array $conta, float $valorDepositar) {
    if ($valorDepositar > 0) {
        $conta['saldo'] += $valorDepositar;
    } else {
        exibeMensagem("Valores negativos não são depositados.");
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

$contasCorrentes['789.0123.456-7'] = depositar($contasCorrentes['789.0123.456-7'], 1700);

foreach ($contasCorrentes as $cpf => $conta) {
    //Existem dois modos de strings simples e complexas:
    //Para acessar um array associativo dentro de uma string, basta tirar as aspas, 
    //  é possível utilizar aspas duplas nesse caso (string simples).
    //  Ex: "$cpf  $conta[titular] $conta[saldo]"
    //As strings complexas, utiliza-se chaves entre os arrays associativos.
    //  O interessante é manter o padrão de acesso ao índice do array como acessa fora de uma string.
    exibeMensagem(
        $mensagem = "$cpf  {$conta['titular']} {$conta['saldo']}"
    );
}