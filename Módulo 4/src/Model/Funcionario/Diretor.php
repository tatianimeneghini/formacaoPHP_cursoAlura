<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Autenticavel;
use Couchbase\Autenticador;

class Diretor extends Funcionario implements Autenticavel {
    public function calcularBonificacao(): float {
        return $this->recuperarSalario() * 2;
    }

    public function podeAutenticar (string $senha): bool {
        return $senha === '1234';
    }
}