<?php

namespace Alura;
require 'ArrayUtils.php';
require 'autoload.php';

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

echo "<pre>";
var_dump ($correntistas_e_compras);

ArrayUtils::remover("Giovanni", $correntistas_e_compras);
// // Caso o valor não exista, o PHP utilizará o juggling
// //  uma propriedade que armazena o valor false, convertendo para 0.
// //  Dessa forma, o PHP executará do mesmo modo o unset, que excluirá a primeira posição do array.

// // Para que a conversão de um argumento não seja feita de modo automático (casting),
// //   a versão 7 do PHP consegue declarar de tipos estritos.
// // declare(strict_types=1)

var_dump($correntistas_e_compras);
echo "</pre>";

// Função para inserir somente um dos arrays em um novo.
$correntistasPagantes = array_diff ($correntistas, $corrrentistasNaoPagantes);

echo "<pre>";
var_dump ($correntistasPagantes);
echo "</pre>";

// Função para unir dois arrays.
$relacionados = array_merge ($correntistas, $saldos);

echo "<pre>";
var_dump ($relacionados);
echo "</pre>";

// Função que une os elementos dos dois arrays como chaves e valores. 
// No PHP é chamado de array associativo (em outras linguagens é chamado map).
$relacionados = array_combine($correntistas, $saldos);

echo "<pre>";
var_dump ($relacionados);
echo "</pre>";

// Função que retorna true ou false caso a chave exista ou não.
if (array_key_exists("Joao", $relacionados)) {
    echo "O saldo do Joao é: {$relacionados["Joao"]}";
} else {
    echo "Não foi encontrado";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo  "</pre>";

// No caso dos arrays associativos, o foerach correto seria:
// foreach ($nomes_saldos as $nome => $saldo) {}