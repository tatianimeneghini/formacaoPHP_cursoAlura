<?php

namespace Alura\Banco\Model;

use Alura\Banco\Model\Pessoa;

class Funcionario extends Pessoa {
    private string $cargo;

    public function __constructor(string $nome, CPF $cpf, string $cargo) {
        parent:: __construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperarCargo(): string {
        return $this->cargo;
    }

    public function alterarNome(string $nome): void {
        $this->validarNome($nome);
        $this->nome = $nome;
    }
}