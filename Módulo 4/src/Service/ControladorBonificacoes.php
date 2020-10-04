<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Funcionario;

class ControladorBonificacoes {
    private $totalBonificacoes = 0;

    public function adicionarBonificacao($funcionario) {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function recuperarTotal(): float {
        return $this->totalBonificacoes;
    }
}