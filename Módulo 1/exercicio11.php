<?php

//Casos excepcionais, é comum na programação, ir no primeiro momento.

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        continue; 
        //Para pular uma interação, é só colocar o <continue>.
        //Para quebrar o looping, é só colocar <break>.
        //Para boas práticas, é melhor evitar.
    } 
    echo "#$contador" . PHP_EOL;
}