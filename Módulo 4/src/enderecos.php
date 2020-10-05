<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Minha rua',
    '71b',
    'bairro qualquer',
    'Petrópolis'    
);
$outroEndereco = new Endereco(
    'Uma rua aí',
    '50',
    'Centro',
    'Rio'
);

echo $umEndereco->bairro;
exit();