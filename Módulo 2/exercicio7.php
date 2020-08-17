<?php

$listaIdade = [12, 18, 24, 35, 40, 63]; 

//Para adicionar novo elemento no array
$listaIdade[6] = 39;

$listaIdade[] = 16;

foreach ($listaIdade as $idade) {
    echo $idade . PHP_EOL;
}