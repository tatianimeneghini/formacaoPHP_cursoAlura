<?php

$saldos = [
    2500,
    3000,
    1000,
    3700,
    9000
];

foreach ($saldos as $saldo) {
    echo "<p>O saldo é $saldo</p>";
}

// echo "<pre>";
// var_dump($saldos);

//Ordenar o array
sort($saldos);
// var_dump($saldos);
// echo "</pre>";

echo "<p>O menor saldo é $saldos[0]</p>";