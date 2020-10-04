<?php

namespace Alura\Banco\Model\Funcionario;

class Diretor extends Funcionario {
    public function calcularBonificacao(): float {
        return $this->recuperarSalario() * 2;
    }

    public function podeAutenticar (string $senha): bool {
        return $senha === '1234';
    }
}