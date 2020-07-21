<?php

//Operadores matemáticos
$idadeAtual = 29;
$idadeDaquiA10Anos = $idadeAtual + 10;
$idadeHa10Anos = $idadeAtual - 10;
$idadeDobrada = $idadeAtual * 2;
$idadeDividida = $idadeAtual / 2;
$idadeRestoDaDivisao = $idadeAtual % 2;
$idadeAoQuadrado = $idadeAtual ** $idadeAtual;

echo $idadeDaquiA10Anos - (($idadeDobrada + $idadeDividida) - ($idadeAoQuadrado + $idadeRestoDaDivisao));