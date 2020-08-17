<?php

//Acessando índices com looping.

$listaIdade = [12, 18, 24, 35, 40, 63];

//O count rcebe uma lista e calcula o tamanho de uma lista
echo "A lista possui ";
echo count($listaIdade);
echo " elementos." . PHP_EOL;

for ($i = 0; $i < 6; $i++) {
    echo $listaIdade[$i] . PHP_EOL;
} 