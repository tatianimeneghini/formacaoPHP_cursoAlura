<?php

namespace Alura\Banco\Model\Funcionario;

class Gerente extends Funcionario {
    public function calcularBonificacao(): float {
        return $this->recuperarSalario();
    }
}