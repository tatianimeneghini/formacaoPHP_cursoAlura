<?php

$nome = "Tatiani";
$idade = 29;
echo "Você só pode entrar se tiver mais que 18 anos" .PHP_EOL;

if ($idade >= 18 and $nome = "Tatiani") {
    echo "Você tem $idade anos". PHP_EOL;
    echo "Pode entrar!";
}

echo "Você só tem $idade anos. Você não pode entrar";