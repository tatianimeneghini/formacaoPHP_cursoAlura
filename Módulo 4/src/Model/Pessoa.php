<?php

namespace Alura\Banco\Model;

class Pessoa
{
    protected $nome; // elemento é protegido dentro das classes mãe e filha.
    private $cpf;

    public function __construct(string $nome, $cpf) {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string {
        return $this->nome;
    } 

    public function recuperarCPF() {
        return $this->cpf->recuperarNumero();
    }

    protected function validarNome(string $nome) {
        if (strlen($nome < 5)) {
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }
}