<?php

namespace Alura\Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario {
    public function calcularBonificacao(): float {
        return 500.00;
    }

    public function subirNivel() {
        $this ->receberAumento($this->salario);    
    }
}