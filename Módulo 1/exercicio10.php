<?php

//A lógica é igual a essas três formas:  
//$contador = $contador + 1;
//$contador += $contador;
//$contador++;

for ($contador = 1; $contador <= 15; $contador++) {
    echo "#$contador" . PHP_EOL;
}

//Quando saber o final da condição (limites claros), usar o <for>.
//Quando o limite não estiver claro, usar o <while>.