<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;

abstract class Funcionario extends Pessoa {
    public function __construct(string $nome, CPF $cpf, float $salario) {
        parent:: __construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function alterarNome(string $nome): void {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function recuperarSalario(): float {
        return $this->salario;
    }

    public function receberAumento($valorAumento): void {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calcularBonificacao(): float;
}