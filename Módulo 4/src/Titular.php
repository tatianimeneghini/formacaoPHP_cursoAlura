<?php

class Titular {
    private string $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, $nome, Endereco $endereco) {
        $this->$cpf = $cpf;
        $this->validarNome($nome);
        $this->$nome = $nome;
        $this->$endereco = $endereco;
    }

    public function recuperarCPF(): string {
        return $this->$cpf->recuperarNumero;
    }

    public function recuperarNome(): string {
        return $this->$nome;
    }

    private function validarNome(string $nome) {
        if (strlen($nome < 5)) {
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public function recuperarEndereco(): Endereco {
        return $this->endereco;
    }
    
}