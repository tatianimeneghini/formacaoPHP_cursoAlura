<?php

namespace Alura\Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario {
    public function calcularBonificacao(): float {
        return $this->recuperarSalario() * 0.05;
    }

    public function subirNivel() {
        $this ->receberAumento($this->salario);    
    }
}