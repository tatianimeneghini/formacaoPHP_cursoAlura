<?php

//Desafio dos números pares

for ($contador = 1; $contador <= 100; $contador++) {
    if ($contador % 2 == 0) {
        echo $contador . PHP_EOL;
    //} else {
    //      echo $contador . " é um número ímpar." . PHP_EOL;
    }
}