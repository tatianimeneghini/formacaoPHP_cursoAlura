<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Autenticavel;

class Gerente extends Funcionario implements Autenticavel {
    public function calcularBonificacao(): float {
        return $this->recuperarSalario();
    }

    public function podeAutenticar (string $senha): bool {
        return $senha === '4321';
    }
}