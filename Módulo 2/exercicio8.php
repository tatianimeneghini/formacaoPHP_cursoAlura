<?php

//Subscrição de tipos diferentes em array
$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

//O PHP só trabalha com chaves em arrays associativos apenas em string ou número inteiro.
//No caso do nosso exemplo, o PHP entende apenas um dos dois casos e acaba subscrevendo o anterior.

foreach ($array as $item) {
    echo $item . PHP_EOL;
}

//Então, a chave "8" vai converter para 8, int.
//A chave do float, vai ignorar o decimal e pegar apenas o int.