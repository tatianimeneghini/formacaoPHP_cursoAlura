<?php

require 'Calculadora.php';

$notas = [9, 5, 10, 8];

$calculadora = new Calculadora();
$media = $calculadora->calcularMedia($notas);

if ($media) {
    echo "A média é <strong>$media</strong>";
} else {
    echo "Não foi possível calcular a média :(";
}