<?php

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Model\Funcionario\Diretor;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    "Luciana Paiva", 
    new CPF ("123.456.789-0"), 
    10000
);

$autenticador->logar($umDiretor, '4567');