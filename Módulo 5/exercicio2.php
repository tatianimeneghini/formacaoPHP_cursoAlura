<?php

$nomes = "Giovanni, João, Maria, Pedro";

//Para transformar a string em array, a função explore()
$arrayNomes = explode (" ", $nomes); //primeiro é delimitador
var_dump($arrayNomes);

foreach($arrayNomes as $nome) {
    echo "<p>Olá $nome</p>";
}


$nomesJuntos = implode (", ", $arrayNomes); //primeiro é o que cola
var_dump($arrayNomes);