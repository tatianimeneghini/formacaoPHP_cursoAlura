<?php

//Para exibir no navegador, é só digitar o comando:
// <php -S localhost:8000>

// $notaPortugues = 9;
// $notaGeografia = 8.5;
// $notaMatematica = 9;
// $notaHistoria = 9.5;

//Array
// - função array:
//  $notas = array();
// - inicialização rápida:
$notas = [9, 8.5, 9, 9.5];

// Função para calcular o tamanho do array:
$quantidadeNotas = sizeof($notas);

echo "<p>A nota de Português foi <strong>" . $notas[0] . "</strong></p>"; //concatenação
echo "<p>A nota de Geografia foi <strong>$notas[1]</strong></p>"; //interpolação
echo "<p>A nota de Matemática foi <strong>$notas[2]</strong></p>";
echo "<p>A nota de História foi <strong>$notas[3]</strong></p>";

// Iterações sobre o array
$soma = 0;
for ($i = 0; $i < $quantidadeNotas; $i++) {
    $soma = $soma + $notas[$i];
}

$media = $soma / $quantidadeNotas;

echo "<p>A média desse bimestre foi <strong> $media</strong></p>";