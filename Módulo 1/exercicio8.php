<?php

$idade = 19;
$mensagem = $idade < 18 ? "Você é menor de idade" : "Você é maior de idade";
echo $mensagem;

//Operador ternário é uma forma de reduzir a condicional if/else.
//se $idade for menor que 18, então a variável $mensagem será "Você é menor de idade"
//senão, então a variável $mensagem será "Você é maior de idade"