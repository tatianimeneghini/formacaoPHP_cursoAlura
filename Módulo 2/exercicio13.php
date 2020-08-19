<?php

$listaIdade = [12, 18, 24, 35, 40, 63];

//A list é uma função que recebe variáveis e faz com que os valores nos índices da lista sejam passados na mesma ordem.
//É uma forma mais elegante de pegar as variáveis e atribuir valores para elas.
list($idadeVicinius, $idadeJoao, $idadeMaria) = $listaIdade;

//Função remover item:
unset($listaIdade[2]);

//Forma de adicionar item:
$listaIdade[] = 20;

foreach ($listaIdade as $idade) {
    echo $idade . PHP_EOL;
}